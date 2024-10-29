<?php
	
	session_start();
	
	$name = ""; $email = ""; $message = "";
	
	if (isset($_SESSION['name'])) {
		$name = $_SESSION['name'];
	}
	
	if (isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
	}
	
	if (isset($_SESSION['message'])) {
		$message = $_SESSION['message'];
	}
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
	</style>
</head>
<body>
	<div class="contact-form">
        <h1>Contact Us</h1>
        <form action="pros_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name ?>">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email ?>">
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5"><?php echo $message ?></textarea>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>