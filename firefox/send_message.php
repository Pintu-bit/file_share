<?php
 $to="pg587005@gmail.com";
 $subject=$_POST['sender_name'];
$message=$_POST['message'];
$from=$_POST['from'];
$header="From :$from";
if(mail($to,$subject,$message,$header))
  {
    header('location:https://firefoxii.000webhostapp.com/contact.php?id=0');
  }
 else
  {
    header('location:https://firefoxii.000webhostapp.com/contact.php?id=1');
  }
?>