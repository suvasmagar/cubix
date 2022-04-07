<?php
   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $contact = $_POST['contact'];
   $specific = $_POST['specific'];
   $cv = $_POST['cv'];

$conn = new mysqli('localhost','root', '', 'usermsg');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else{
  if(isset($_POST["submit"]))
  {

  $pname = rand(1000,10000)."-".$_FILES['file']['name'];
  $tname = $FILES['files']['tmp_name'];
  $uploads_dir = '/images';
  move_uploaded_file($tname, $uploads_dir.'/'.$pname);

  $stmt= $conn -> prepare("INSERT INTO form (Username, Email, Contact, Job_Specification, CV) VALUES (?, ?, ?, ?, ?)");
  $stmt -> bind_param("ssisb", $fname, $email, $contact, $specific, $cv);

  $stmt->execute();

  echo "Connected successfully";
  $stmt -> close();
  $conn -> close();
  }
}




?>