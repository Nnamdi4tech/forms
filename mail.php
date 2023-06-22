<?php
//get data from form  
$name = $_POST['name'];

$email= $_POST['emailaddress'];

$message= $_POST['message'];

$number= $_POST['mobile'];

$packs= $_POST['packs'];

$to = "trimmexherbs@gmail.com";

$subject = "Mail From website";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."
\r\n Mobile number =". $number . "\r\n No of packs =". $packs;

$headers = "From: noreply@nnamdi4tech.github.io/forms/" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>

