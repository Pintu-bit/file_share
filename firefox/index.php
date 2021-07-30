<?php
$con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'firefox_1');
  ?>
<!doctype html>
 <html>
 <head>
 <style type="text/css">
 <meta charset="UTF-8" >
<script src="https://use.fontawesome.com/7cdbaf2a11.js"></script>
#div_slide
 {    
width:200px;
height:200px;
box-shadow:-6px 6px 3px  #00a333, -12px 12px 3px #00a333;
//margin:100px  0px 100px 50px;
background-color:black;
 }
   #div{
  
    margin-top:50px;
     width:45%;
     height:40px;
    }
  #costem-btn 
  {
    width:300px;
    padding:10px 40px;
  background:#025d05;
  border:none;
 border-radius:5px;
 font-size:15px;
  color:#fff;
  text-transform: uppercase;
   font-weight: bold;
  }
</style>
 </head>
 <body bgcolor=#00a3a3>
<?php
 include "header.php";
 ?>
 <div style="float:right;border:solid 1px;width:30%;height:70px;"></div><div style="width:30%;height:70px;border:solid 1px;"></div>

<div id="list" style="width:18%;height:30px;background-color:cyan;margin:top:-10px;cursor:pointer;"><center><h3>See list</h3></center></div>
<div id="diff_div" style="width:29%;height:400px;background-color:cyan;position:absolute;top:180px;z-index:999;display:none;overflow-y:scroll;"><center><b><i>No such content available  now!</i></b></center>
<div id="cont"></div>
</div>
<center>
<form action="add.php" method="post" enctype="multipart/form-data">
  
<div id="div" >
  <form action="tet.php" method="post" enctype="multipart/form-data">
    <input type="file" id="file" hidden name="file"/>
 <button type="button" id="costem-btn">        
upload file 
 </button>
 </div>
 <!--<i style="font-size:20px;">Rename the uploaded file</i><br>
 <input type="text" style="font-size:20px;width:20%;height:40px;background-color:#484748;"/>-->
<script>
 var realFile=document.getElementById("file");
 var costBtn=document.getElementById("costem-btn");
 var costText=document.getElementById("costem-text"); 
  costBtn.addEventListener('click',function()
  {
     realFile.click();
  })

</script>
<?php
  if(isset($_GET['max']))
    {
        if($_GET['max']==1)
      echo "<b style='color:red;'>"."please enter a valid number of downloading"."</b>";
    }
 ?>
<div id="max_r" style="margin-top:30px;"></div>
<!--<div style="width:45%;height:40px;background-color:#484748;margin-top:50px;">
  <center><input id="file" type="file" style="width:100%;margin-left:0px;height:40px;border:none;" name="file" placeholder="hello"/></center>  
 </div>-->
  
  <br>
<br>
<br>
   <input type="text/number" id="pass" placeholder="password" style="font-size:20px;width:20%;height:40px;background-color:#484748;margin-top:10px;margin-left:29.5%;float:left;color:#e4d1b9;" name="pass" /> 
   
  <input type="number" id="max_d" name="max" style="font-size:20px;width:20%;height:40px;background-color:#484748;margin-top:10px;margin-left:5px;float:left;color:#e4d1b9;" placeholder="downloading number"/>
 <br>
<br>
<br>
 <h3 >Upload file </h3>
   <button style="width:25%;height:30px;background-color:#66CCCC;cursor:pointer">upload</button>
 </form>
<br><br>
 
  </center><br>
<div id="atm"></div>
 
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
$(document).on('click','#list',function(){
   $('#diff_div').slideToggle(); 
   console.log($("#list").innerHTML);
   $.ajax({
   url:"fetch_data.php",
   type:"post",
   success:function(data)
  {
     $("#cont").html(data);
   }
});
 });

$(document).on('click','#search_btn',function(){      
 var vlu=document.getElementById("item").value;
  $.ajax({
     url:"download_firefox.php",
     type:"POST",
     data:{action:"download",value:vlu},
     success:function(data) {
    $("#atm").html(data); }
  });
 });

$(document).on('click','#password',function(){      
// var file_name=document.getElementById("file").value;
 //var file_size=document.getElementById("file").files[0].size;
// var password=document.getElementById("pass").value;
   var password=window.prompt("Enter password ");
   
  $.ajax({
     url:"download_firefox.php",
     type:"POST",
     data:{action:"fetch",pass:password},
     success:function(data) {
    $("#diff_div").html(data);
       
     }
  }); 
 }); 
$(document).on('input','#file',function(){      
var file_name=document.getElementById("file").value;
  $.ajax({
     url:"test.php",
     type:"POST",
     data:{pass:file_name},
     success:function(data) {
    $("#costem-btn").html(data);
     }
  }); 
 }); 

$(document).on('input','#max_d',function(){      
var max_v=document.getElementById("max_d").value;
 $.ajax({
     url:"test.php",
     type:"POST",
     data:{action:"max_check",pass1:max_v},
     success:function(data) {
    $("#max_r").html(data);
     }
  });
 
 }); 

});
</script>

 <?php 
 include "footer.php";
 ?>
  </body>
</html>
 
