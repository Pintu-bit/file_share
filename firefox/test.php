<?php
 $tem=$_POST['pass'];
 $temp="";
 $c=0;
$lastI=strripos($tem,chr(92));
 for($i=$lastI+1;  $i<strlen($tem);  $i++)
   {
      $temp.=$tem[$i];
    } 
 echo "<b style='margin-top:7px;font-size:22px;color:#FFF8DC'>"."Your uploaded file is ".$temp."</b>";  
 ?>