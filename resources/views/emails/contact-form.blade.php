<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { padding: 20px; border: 1px solid #ddd; border-radius: 5px; max-width: 600px; margin: 20px auto; }
        h1 { color: #000; }
        strong { color: #555; }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Website Inquiry</h1>
        <p>You have received a new message from your website's contact form.</p>
        <hr>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone Number:</strong> {{ $data['phoneNumber'] ?? 'Not provided' }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $data['message'] }}</p>
    </div>
</body>
</html>