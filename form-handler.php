<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $purchase = $_POST['purchase'];
    $message = $_POST['message'];
    
    // Get the page the form was submitted from
    $page = $_POST['page'];
    
    $email_from = 'info@GMMBLuxuryEmpire.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name\n" .
                  "User Email: $visitor_email\n" .
                  "User Purchase: $purchase\n" .
                  "Message: $message\n";

    $to = 'nathanaelohiro@gmail.com';
    $headers = "From: $email_from\r\n";
    $headers .= "Reply-To: $visitor_email\r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        if ($page == "blog") {
            header("Location: Blog.html");
        } elseif ($page == "contact") {
            header("Location: Contact.html");
        } else {
            // Default redirect if page is not specified
            header("Location: index.html");
        }
        exit();
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit();
}
?>
