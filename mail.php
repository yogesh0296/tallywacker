<?php 
$to="singhalkratika12@gmail.com";
$subject1="You have a new enquiry by website";
 
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['subject']) && !empty($_POST['message'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	 
	$mobile=$_POST['mobile'];
	$subject=$_POST['subject'];
	 
	$message=$_POST['message'];
	$message2="First Name = $name \nEmail = $email \nPhone Number = $mobile \nSubject = $subject \nMessage = $message";
	$from = "kratikasinghal12@gmail.com";
	$headers = "From:" . $from;
	mail($to,$subject1,$message2,$headers);
	@header('Location: http://www.domain.com/thankyou.html');
}else{
 echo "<script>alert('All fields are required');
 window.location.href='http://www.domain.com'</script>";   
}
?>
