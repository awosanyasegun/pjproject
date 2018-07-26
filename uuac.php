<?php
$from="ukruniadm@gmail.com"
$surnameField =$_POST['surname'];
  $firstnameField =$_POST['firstname'];
  $middlenameField =$_POST['middlename'];
  $nationalityField =$_POST['nationality'];
  $university Field =$_POST['university'];
  $courseField =$_POST['course'];
  $statusField =$_POST['status'];
  $phoneField =$_POST['phone'];
  $emailField =$_POST['email'];
  $commentField =$_POST['comment']; 
  $dateField =$_POST['BirthDate']; 
  $achievementField =$_POST['achievements'];  
  $resultField =$_POST['result']; 
  $idpageField =$_POST['idpage'];

mail($email, $surname, $message, "From:".$from);
print"Your message has been sent:" </br>$email</br>subject</br>$message</p>";
?>