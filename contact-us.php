<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Collect form data
	$name = htmlspecialchars($_POST['firstname']);
	$email = htmlspecialchars($_POST['email']);
	$number = htmlspecialchars($_POST['number']);
	$product = htmlspecialchars($_POST['Product']);
	$industryType = htmlspecialchars($_POST['IndustryType']);
	$businessName = htmlspecialchars($_POST['BusinessName']);
	$message = htmlspecialchars($_POST['message']);

	// Validate email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email format";
		exit;
	}

	// Recipient email
	$to = "jatin@jdgurus.com"; // Replace with your company email

	// Email subject
	$subject = "New Contact Form Submission";

	// Email content
	$body = "You have received a new message from the contact form on your website.\n\n" .
		"Full Name: $name\n" .
		"Email: $email\n" .
		"Phone Number: $number\n" .
		"Product: $product\n" .
		"Industry Type: $industryType\n" .
		"Business Name: $businessName\n" .
		"Message: $message\n";

	// Additional headers
	$headers = "From: $email\r\n";
	$headers .= "Reply-To: $email\r\n";

	// Send the email
	if (mail($to, $subject, $body, $headers)) {
		echo "Message sent successfully!";
	} else {
		echo "Message sending failed.";
	}
} else {
	echo "Invalid request";
}
?>