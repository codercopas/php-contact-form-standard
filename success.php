<?php 

session_start(); session_unset();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
	<style>
		body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
		.contact-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
		.contact-form h1 {
            margin-top: 0;
			background: #D4F8FF;
			padding: 10px;
			text-align: center;
			border: 1px solid #ccc;
        }
        .contact-form label {
            display: block;
            margin-bottom: 8px;
        }
		
        .contact-form input,
        .contact-form textarea {
            width: 95%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .contact-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
			width:100%;
        }
        .contact-form input[type="submit"]:hover {
            background-color: #45a049;
        }
		
		#success-block {
			text-align: center;
			color: green;
		}
	</style>
</head>
<body>
	<div class="contact-form">
        <h1>Contact Us</h1>
		<div id="success-block">
        <p>Terimakasih! Pesan anda berhasil dikirim.</p>
		<p><a id="link-button" href="contact.php" title="Kembali ke Form">KIRIM LAGI</a></p>
		</div>
    </div>
</body>
</html>