<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve form data
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   // Validate email
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      exit();
   }

   // Compose email message
   $to = "recipient@example.com"; // Replace with the recipient's email address
   $subject = "New Message: " . $subject;
   $body = "Name: $name\n";
   $body .= "Email: $email\n";
   $body .= "Phone: $phone\n";
   $body .= "Message: $message\n";

   // Send email
   if (mail($to, $subject, $body)) {
      echo "Email sent successfully";
   } else {
      echo "Failed to send email";
   }
}
?>
