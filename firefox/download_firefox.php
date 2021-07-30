<?php
 $con=mysqli_connect('localhost','id15377330_pg0258_np','C>2iF)SB0HD-gZ0U');
  mysqli_select_db($con,'id15377330_firefox_1');
 $repl="";
 $dwn="";
 $count=1;
 if($_POST['action']=='download')
        {
               $value=$_POST['value']; 
                      $sql="select *from data where file_name='$value' ";
            $result=mysqli_query($con,$sql);
           if($result)
                {
                 if($num=mysqli_num_rows($result))
                    {
                     $row=mysqli_fetch_assoc($result);
                      $repl.='<h4 style="margin-left:150px;">'.'SEARCHED ELEMENT IS AVAILAVLE'.'</h4><div id="div1" style="margin-left:150px;margin-top:5px;width:45%;height:40px;background-color:red;float:left;"><center><h3 style="margin-top:3px;">'.$row['file_name'].'</h3></center></div>';
 
                  $repl.='<div id="diff_div" style="background-color:cyan;width:240px;height:40px;float:left;margin-left:10px;margin-top:4px;cursor:pointer;" ><div id="password" style="background-color:cyan;width:240px;height:40px;float:left;margin-left:10px;margin-top:0px;cursor:pointer;"><center><h3 style="margin-top:5px;">'.'Download'.'</h3></center></div><div>';      
                   }        
               else 
                     {
                       $repl.='<center><h3>'.'SORRY! NO  SUCH  ITEM  FOUND!!'.'</center></h3>'; 
                      }          
                }
 echo $repl;
 }
 if($_POST['action']=='fetch')
     {
        $pass=htmlentities(md5($_POST['pass']),ENT_QUOTES);
           $sql_0="select *from data where password='$pass' ";
            $result_0=mysqli_query($con,$sql_0);
           if($result_0)
                {
                 if($num=mysqli_num_rows($result_0))
                   {
                     $row_0=mysqli_fetch_assoc($result_0);
                        if($row_0['max_d']>1)
                           {
                       $count=$row_0['max_d']-1; 
                           $sql_1="update data set max_d=$count where password='$pass' ";
                            $result_1=mysqli_query($con,$sql_1);
                            // if($result_1){ echo "<script> location.reload(); </script>";}
                            $dwn.='<a href="file_upload/'.$row_0['file_name']. ' "download><center><h4 style="margin-top:5px;" onclick="location.reload()">'.'CLICK HERE TO DOWNLOAD'.'</h4></center></a>';
                   
                            }
                          else
                           {
                              if($row_0['max_d']==1)
                                   {                                                                         
                                         $dwn.='<a href="file_upload/'.$row_0['file_name']. ' "download><center><h4 style="margin-top:5px;" onclick="location.reload()">'.'CLICK HERE TO DOWNLOAD'.'</h4></center></a>';         
                                                   
                                                 echo " <script>alert('you was the last downloader of it');</script>";
                                                  
                                                        $date_1= $row_0['date'];
                                                  $mod_date = strtotime($date_1."+1 day");
                                                    $s=date('Y-m-d ' ,$mod_date);
                                                     $current_date=date('Y-m-d');
                                                       if($current_date==$s)
                                                       {
                                                          unlink("file_upload/".$row_0['file_name']); 
                                                           
                                                        } $s="delete from data where password='$pass' ";
                                                   $r=mysqli_query($con,$s);
                                                     
                                      }    
                             }
                              
                     }
                    else 
                      {
                          $dwn.='<center><h5 style="margin-top:5px;cursor:non;">'.'Wrong Password please secrch again '.'</h5></center>';      
                                                          
                       }
                   }
              echo $dwn;   
       }   
//header('location:http://localhost/firefox/fireFox.php'); file_exists("firefox/file_upload/".$f['name']");
mysqli_close($con);
?>
 