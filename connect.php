<?php
   $fname = $_POST['fname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

// $conn = new mysqli('localhost','root', '', 'usermsg');

$to = "suvas.magar.69@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $fname . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
//header("Location:thankyou.html")


// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// else{

//   $stmt= $conn -> prepare("INSERT INTO Form1 (Username, Email, Message) VALUES (?, ?, ?)");
//   $stmt -> bind_param("sss", $fname, $email, $message);

//   $stmt->execute();

//   echo "Connected successfully";
//   $stmt -> close();
//   $conn -> close();
// }
?>