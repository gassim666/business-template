<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $emailForm = $_POST['email'];
  $message = $_POST['message'];

  $emailTo = "algacimuj@gmail.com";
  $headers = "From: ".$emailFrom;
  $txt = "you have a message ".$name".\n\n" .$message;

  email($emailTo, $name, $txt, $headers);

  header("Location: index.html?MessageSend");





}







?>