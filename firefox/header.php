<!doctype html>
<html>
<head>
 <style type="text/css" >
  .h
 {
  margin-top:-1px;
  } 
</style>
</head>
<body>
<div id="div_slide" style="width:98%;height:100px;background-color:cyan;">
<h1 style="margin-left:10px;">Firefox.com</h1>

<a href="http://localhost/firefox/contact.php" ><div class="div_to_o" style="width:18%;height:30px;background-color:grey;position:relative;top:-10px;float:left;left:80%;margin:1%"><center><h3 class="h">Contact us</h3></center></div></a>
<a href="http://localhost/firefox/about.php" ><div  class="div_to_o"  style="width:18%;height:30px;background-color:grey;position:relative;top:-10px;float:left;left:41%;margin:1%;"><center><h3 class="h" >About us</h3></center></div></a>
<a href="" ><div class="div_to_o"  style="width:18%;height:30px;background-color:grey;position:relative;top:-10px;float:left;left:2%;margin:1%;"><center><h3 class="h" >Home</h3></center></div></a>


<a href=""><div id="lis" class="div_to_o"  style="width:18%;height:30px;background-color:grey;position:relative;top:-10px;float:left;left:-37%;margin:1%;"><center><h3 class="h" >See list</h3></center></div></a>


</div>
<script type="text/javascript" ></script>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
 $(document).on('mouseover','.div_to_o',function()
     {
       // var x=document.getElementById("div_to_o");
        $(this).css("background-color", "#00a333");
    //alert();
});
$(document).on('mouseout','.div_to_o',function()
     {
       // var x=document.getElementById("div_to_o");
        $(this).css("background-color", "grey");
    //alert();
});
});
</script>
 
</body>
</html>