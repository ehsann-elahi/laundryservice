<?php

namespace App\Mail;

use App\Models\FormSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmittedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;
    public $form;
    public $pdfPath;

    public function __construct($form, $submission, $pdfPath)
    {
        $this->form = $form;
        $this->submission = $submission;
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        return $this->subject('New Form Submission - ' . $this->form->title)
            ->view('emails.form_submitted')
            ->attach(storage_path('app/public/' . str_replace('/storage/', '', $this->pdfPath)))
            ->with([
                'form' => $this->form,
                'submission' => $this->submission,
            ]);
    }
}
