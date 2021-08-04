

<!DOCTYPE html>
<html>
<head>
    
 <title>This Is mY homepage</title>
    <link rel="icon" href="img/5.png" type="image/x-png">
    <link href="css.css"rel="stylesheet" type="text/css" />
    <link href="form1.css"rel="stylesheet" type="text/css" />
   
 <style type="text/css">
td
{

font-family: mtn Brighter sans;

}
</style>
</head>


<center>



<table border="0" bordercolor="#003399" height="222" width="799">
<tr>
<td width="800"><img src="banner.jpg" height="222" width="799"></td>
</tr>
</table>
</center>
</body>
<body>
<center>
<table border="0" width="800" height="25">
<tr>
<td width="300">
<center><font face="mtn brighter sans">
<b><b></font></center>
</td>
<td width="250">

<table cellpadding="0px" cellspacing="0px"> 

</table>

</td>

<td width="150">

</td>
</tr>
</table>
</center>
</body>
<body>

<nav id="ddmenu">
    <div class="menu-icon"></div>
    <ul>
       <li class="no-sub">
            <a class="top-heading" href="home.php">HOME</a>            </li>
          </div>
            </div>
        </li>
<li class="no-sub">
            <a class="top-heading" href="new.php">New Computer</a>            </li>
        
       <li class="no-sub">
            <a class="top-heading" href="view.php">All Computer</a>           </li>  
        <li class="no-sub">
            <a class="top-heading" href="update.php">Update</a>           </li>  
                   <li class="no-sub">
            <a class="top-heading" href="delete1.php">Delete</a>            </li>
             <li class="no-sub">
            <a class="top-heading" href="gallairy.php">Gallairy</a>            </li>
                   
                   </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
</body>

<body>
<center>

<table border="0" bordercolor="#003399" height="400" width="820" style="margin-top:-77px; margin-left: 133px;>
<tr>
<td width="200">

</td>
<td width="550" style="">


    

<?php
include('config.php');
if(isset($_GET['serial']))
{
$serial=$_GET['serial'];
if(isset($_POST['submit']))
{
$os_name=$_POST['os_name'];
$system=$_POST['system'];
$serial=$_POST['serial'];
$ram=$_POST['ram'];


$processor=$_POST['processor'];
$bios_model=$_POST['bios_model'];
$hd=$_POST['hd'];


$query3=mysql_query("update pc set os_name='$os_name', system='$system', ram='$ram', processor='$processor', bios_model='$bios_model' , hd='$hd' where serial='$serial'");
echo "COMPUTER UPDATED SUCCESSFULLY!!!";
echo "<META http-equiv=refresh content=1;URL=update.php>";
if($query3)
{
('locations:update.php');
}
}
$query1=mysql_query("select * from pc where serial='$serial'");
$query2=mysql_fetch_array($query1);
?>

<form method="post" action="">
  <table>
    <tr>
      <td>
Operating System:</td><td><input type="text" name="os_name" value="<?php echo $query2['os_name']; ?>" id="user"/><br /></td></tr>
<tr>
<td>
System Type:</td><td><input type="text" name="system" value="<?php echo $query2['system']; ?>" id="user"/><br /><br /></td>
<br />
</tr>
<tr>



  <td>
Serial:</td><td><input type="text" name="serial" value="<?php echo $query2['serial']; ?>" id="user"/><br /></td></tr>
<tr>
<td>
Ram:</td><td><input type="text" name="ram" value="<?php echo $query2['ram']; ?>" id="user"/><br /><br /></td>
<br />
</tr>

<tr>



  <td>
processor:</td><td><input type="text" name="processor" value="<?php echo $query2['processor']; ?>" id="user"/><br /></td></tr>

<tr>
<td>
Bios Model:</td><td><input type="text" name="bios_model" value="<?php echo $query2['bios_model']; ?>" id="user"/><br /><br /></td>
<br />
</tr>
<tr>


<tr>
<td>
Hard Disk:</td><td><input type="text" name="hd" value="<?php echo $query2['hd']; ?>" id="user"/><br /><br /></td>
<br />
</tr>
<tr>


  <td colspan="2">

<input type="submit" name="submit" value="update" class="update" id="login"/></td></tr>
</table>
</form>
<?php
}
?>







    
  </body>
</html>