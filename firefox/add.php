<?php 
$con=mysqli_connect('localhost','id15377330_pg0258_np','C>2iF)SB0HD-gZ0U');
  mysqli_select_db($con,'id15377330_firefox_1');
  if(isset($_FILES['file']))
     {
    $pass=htmlentities(md5($_POST['pass']),ENT_QUOTES);
     $max=$_POST['max'];
     if($max<0)
         {
            echo "<script> alert('File Not Uploaded !');</script>";
            echo "<script>window.location.replace('https://firefoxii.000webhostapp.com?max=1');</script>";
            
         }
        else
         {
         $file=$_FILES['file'];
     $f_size=$file['size'];
             $f_name=$file['name'];
               $f_name=htmlentities($f_name,ENT_QUOTES);
        if($f_size<=200000000)
             {
                 move_uploaded_file($file['tmp_name'],"file_upload/".$f_name);         
                 $sqli="insert into data(file_name,password,max_d,date) values('$f_name','$pass',$max,now()) ";
                  $result=mysqli_query($con,$sqli);
                 if($result)
                  {
                     
                    echo "<script> alert('File Uploaded successfully');</script>";
                    echo "<script>window.location.replace('https://firefoxii.000webhostapp.com');</script>";
                    //header('location:index.php'); 
                   }
                 
              }
            else 
             { 
                  //echo '<p style="color:red;">'.'File size too high,Uable to upload!!'.'</p>';
                  echo "<script> alert('File size too high,Unable to upload!!');</script>";
                    header('https://firefoxii.000webhostapp.com'); 
              } 
              //echo "<script> window.location.reload(); </script>";
              
         }   
     }
             mysqli_close($con);
        ?>
   