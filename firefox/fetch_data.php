<?php 
$con=mysqli_connect('localhost','id15377330_pg0258_np','C>2iF)SB0HD-gZ0U');
  mysqli_select_db($con,'id15377330_firefox_1');
$output="";
 $s="select *from data";
  $re=mysqli_query($con,$s);
   if($re)
     {
       if($num=mysqli_num_rows($re))
        {
          while($row=mysqli_fetch_assoc($re))
            {
             $output.="<center><div style='border-radius:5px;width:90%;height:35px;background-color:grey;'>".$row['file_name']."</div></center><br>";
           }
         }
      }
    echo $output;
 ?>