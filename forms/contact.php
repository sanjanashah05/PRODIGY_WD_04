<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Set recipient email address
    $to = 'parampathak47@gmail.com';

    // Set email headers
    $headers = "From: $name <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo '<div class="sent-message">Your message has been sent. Thank you!</div>';
    } else {
        // Error sending email
        echo '<div class="error-message">Sorry, there was an error sending your message.</div>';
    }
} else {
    // If the form was not submitted via POST method
    echo '<div class="error-message">Sorry, this form cannot be submitted directly.</div>';
}
?>
