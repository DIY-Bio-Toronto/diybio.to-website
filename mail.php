<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: diybio.to Website Contact Form';
	$to = 'diybiotoronto@gmail.com';
	$subject = $_POST['subject'];
	$body = "From: $name\n E-mail: $email\n Message:\n $message";
	
?>
<?php
if ($_POST['submit']){
		if (mail ($to, $subject, $body, $from))
		{
			echo '<p>Submitted!</p>';
			
		}
		else
		{
			echo '<p>Error! Try again</p>';
		}
}

?>