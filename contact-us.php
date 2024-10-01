<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Collect the form data and sanitize it
	$name = htmlspecialchars(trim($_POST['firstname']));
	$email = htmlspecialchars(trim($_POST['email']));
	$number = htmlspecialchars(trim($_POST['number']));
	$product = htmlspecialchars(trim($_POST['Product']));
	$industryType = htmlspecialchars(trim($_POST['IndustryType']));
	$businessName = htmlspecialchars(trim($_POST['BusinessName']));
	$message = htmlspecialchars(trim($_POST['message']));

	// Set the recipient email address
	$to = "jatin@jdgurus.com";

	// Set the subject
	$subject = "New Contact Us Form Submission";

	// Construct the email body
	$body = "You have received a new message from your Contact Us form:\n\n";
	$body .= "Full Name: $name\n";
	$body .= "Email: $email\n";
	$body .= "Phone Number: $number\n";
	$body .= "Product: $product\n";
	$body .= "Industry Type: $industryType\n";
	$body .= "Business Name: $businessName\n";
	$body .= "Message:\n$message\n";

	// Set the email headers
	$headers = "From: $email\r\n";
	$headers .= "Reply-To: $email\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion();

	// Send the email
	if (mail($to, $subject, $body, $headers)) {
		echo "Thank you for contacting us! We will get back to you soon.";
	} else {
		echo "Sorry, there was an error sending your message. Please try again later.";
	}
} else {
	echo "Invalid request.";
}
?>