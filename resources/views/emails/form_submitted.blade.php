<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Form Submission</title>
</head>
<body>
    <h2>New Submission Received</h2>

    <p><strong>Form:</strong> {{ $form->title }}</p>
    <p><strong>Participant:</strong> {{ $submission->participant_name ?? 'N/A' }}</p>
    <p><strong>Contact:</strong> {{ $submission->participant_contact ?? 'N/A' }}</p>

    <p>A PDF copy of the submitted form is attached with this email.</p>

    <br>
    <p>— {{ config('app.name') }}</p>
</body>
</html>
