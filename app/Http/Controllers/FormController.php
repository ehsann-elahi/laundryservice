<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;

class FormController extends Controller
{
    // Admin: list forms
    public function index()
    {
        $forms = Form::latest()->get();
        return view('admin.forms.index', compact('forms'));
    }

    // Admin: show submissions for a form
    public function submissions($id)
    {
        $form = Form::findOrFail($id);
        $submissions = $form->submissions()->latest()->get();
        return view('admin.forms.submissions', compact('form', 'submissions'));
    }

    // Public: show the form by slug
    public function show($slug)
    {
        $form = Form::where('slug', $slug)->firstOrFail();
        $template = $form->template;
        return view('forms.show', compact('form', 'template'));
    }

    // Public: handle submission and generate PDF
    public function store(Request $request, $slug)
    {
        try {
            $form = Form::where('slug', $slug)->firstOrFail();
            $data = $request->except('_token');

            $participantName = $data['company_name'] ?? $data['participant_name'] ?? null;
            $participantContact = $data['email_phone'] ?? null;

            // 1️⃣ Save submission in DB
            $submission = FormSubmission::create([
                'form_id' => $form->id,
                'participant_name' => $participantName,
                'participant_contact' => $participantContact,
                'response_data' => $data,
            ]);

            info('✅ Submission created: ' . $submission->id);

            // 2️⃣ Generate PDF using DomPDF
            $pdf = Pdf::loadView('pdf.form_filled', [
                'form' => $form,
                'data' => $data,
                'submission' => $submission
            ])->setPaper('a4', 'portrait');

            // 3️⃣ Ensure storage folder exists
            $folderPath = "forms/{$form->slug}";
            Storage::disk('public')->makeDirectory($folderPath);

            // 4️⃣ Save PDF
            $pdfFileName = "submission-{$submission->id}.pdf";
            $pdfPath = "{$folderPath}/{$pdfFileName}";
            Storage::disk('public')->put($pdfPath, $pdf->output());

            // Confirm PDF saved
            if (!Storage::disk('public')->exists($pdfPath)) {
                throw new Exception("PDF could not be saved at: $pdfPath");
            }

            // 5️⃣ Update DB with public URL
            $submission->update([
                'pdf_path' => Storage::url($pdfPath), // /storage/forms/slug/submission-1.pdf
            ]);

            info('✅ Submission updated with pdf_path: ' . $submission->pdf_path);

            // 6️⃣ Send email with PDF
            Mail::to('admin@laundryservice.ae')->send(new \App\Mail\FormSubmittedMail($form, $submission, $submission->pdf_path));

            // 7️⃣ Return success message
            return redirect()
                ->route('forms.show', $form->slug)
                ->with('success', '✅ Form submitted successfully! PDF generated and email sent.');
        } catch (Exception $e) {
            info('❌ Error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    // Download PDF
    public function downloadPdf($id)
    {
        $submission = FormSubmission::findOrFail($id);
        $path = $submission->pdf_path;

        if ($path && Storage::disk('public')->exists(str_replace('/storage/', '', $path))) {
            return Storage::disk('public')->download(str_replace('/storage/', '', $path));
        }

        return redirect()->back()->with('error', 'PDF not found.');
    }
}
