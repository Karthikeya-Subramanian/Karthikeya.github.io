<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = '21pa05@psgtech.ac.in';
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = 'From: ' . $_POST['from'];

  mail($to, $subject, $message, $headers);
}
?>
