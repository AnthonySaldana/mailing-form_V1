<?php
$emailfile = file('emails.txt');
$emails = array();
$fp = fopen('emails.txt', 'r'); //open file
while (!feof($fp))//run until end of file
{
	//email seperated by newline
	$emailhold = fgets($fp);
	$emailhold = trim($emailhold, '');
	$emails[]=$emailhold;// add emailhold to emails
}


$header = $_POST['header'];
$message = $_POST['letter'];

foreach($emails as $email)
{
	if(!mail($email, $header, $message))
	{echo"error sending mail";}
}
fclose($fp);
?>