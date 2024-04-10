<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mailheader = "From: ".$name."<".$email.">\r\n";
$recipient = "contact@sciapa.org";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo '
<!DOCTYPE html>
<html>
<head>
	<title> Contact | SCIAPA.org </title>
	<link rel="stylesheet" href="/css/reset.css">
	<link rel="icon" href="/assets/IAPA_Logo.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<meta charset="utf-8">
	<meta name="description" content="Official South Carolina Indo American Psychiatric Association website">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="IAPA, South Carolina, SCIAPA, indo, indian, psychiatric, psychiatry, carolina">
	<meta name="author" content="Neil Dembla">
	
	<script src="/js/script.js" defer></script>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
</head>
<body>
	<script id="replace_with_navbar" src="/js/nav.js"></script>

	<div class="container p-5">
		<h1 class="display-1">Thank you for contacting us!</h1>
		<p class="lead" style="font-size: 2.5rem;">We will get back to you as soon as possible.</p>
		<p class="lead" style="font-size: 2rem;">Click <a href="/">here</a> to go back home.</p>
	</div>

	<script id="replace_with_footer" src="/js/footer.js"></script>
</body>
</html>
';