<?php
/* This is the process which receives the email that is entered into the sign up form, checks for 
a duplicate and if there is no duplicate, puts it into a txt file.*/
$customername= strtolower($_POST['name']); //convert input to lowercase
$customeremail= strtolower($_POST['email']);
$emails = array();
$fp = fopen('emails.txt' , 'r');
while(!feof($fp))
{
	$emailholder = fgets($fp);
	$emailholder = trim($emailholder , "\n");
	$emails[] = $emailholder; //add email to the emails array
}

echo<<<newsletterhtml
<body>
<div class="container">
	<div class="row">
		<center><div class="col-mid-12">
newsletterhtml;
		 if(!in_array($customeremail, $emails))
		 {
			file_put_contents("emails.txt","\n", FILE_APPEND);
			file_put_contents("emails.txt",$customeremail, FILE_APPEND);
			fclose($fp);
			echo "<h1>Hello $customername , you've been added to the newsletter</h1>";
		}
		else echo"<h1> duplicate email</h1>";
echo<<<newsletterhtml
		</div></center>
	</div>
</div>
</body>
newsletterhtml;
?>
