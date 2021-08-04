


<!DOCTYPE html>
<html>
<head>
    
 <title>Eletronic</title>
    <link rel="icon" href="img/5.png" type="image/x-png">
    <link href="css.css"rel="stylesheet" type="text/css" />
    <link href="form1.css"rel="stylesheet" type="text/css" />
   
    <style>
        /*The following are for this demo page only (not required for the ddmenu).*/
        /*body { background: #eee url(ddmenu/ddmenug-bg.jpg) no-repeat center 0px; padding-top:-10px; width:200; height:100;}*/
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
<center><font face="mtn brighter sans"><b></font></center>
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

<table border="0" bordercolor="#003399" height="400" width="800">
<tr>
<td width="200">

</td>
<td width="550">

<form action="new.php" method="post">
		
<table border="0"width="500" height="300"  border color="white">
<tr height="60" bgcolor="">
<td colspan="3" id="title" style="text-align:Center;"><font face="MTN Brighter Sans"><b>Enter New Computer</b></font></td>



</tr>
<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>operating system</b></font></td><td colspan="2"> 


<input type="text" size"23" name="os_name"  id="user" value="" required/></td></tr>

<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>System type</b></font></td><td colspan="2"> 


<input type="text" size"23" name="system" value="" id="user" required/></td></tr>


<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Serial  number</b></font></td><td colspan="2"> 


<input type="text" size"23" name="serial" value="" id="user" required/></td></tr>

<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Ram</b></font></td><td colspan="2"> 


<input type="text" size"23" name="ram" value="" id="user" required/></td></tr>

<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>processor</b></font></td><td colspan="2"> 



<input type="text" size"23" name="processor" value="" id="user" required/></td></tr>

<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Bios model</b></font></td><td colspan="2"> 



<input type="text" size"23" name="bios_model" value="" id="user" required/></td></tr>

<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Hard disk</b></font></td><td colspan="2"> 



<input type="text" size"23" name="hd" value="" id="user" required/></td></tr>

<tr height="44"><td colspan="3"><center>

<input name="submit" type="submit" value="REGISTER" id="login" class="formButton">
&nbsp;&nbsp;&nbsp;
</form>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("esms", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$os_name = $_POST['os_name'];
$system = $_POST['system'];
$serial = $_POST['serial'];

$ram = $_POST['ram'];
$processor = $_POST['processor'];
$bios_model = $_POST['bios_model'];
$hd = $_POST['hd'];

$query = mysql_query("insert into pc(os_name, system, serial, ram, processor, bios_model, hd) values ('$os_name', '$system', '$serial','$ram', '$processor',  '$bios_model', '$hd')");
//echo "<br/><br/><div style='background-color:Black;'><font face='MTN Brighter Sans' color='white' SIZE='2'>STUDENT <font color='red'>$fname $lname &nbsp;</font>Is Now Registered</font></div>";//


}

mysql_close($connection); // Closing Connection with Server
?>          


</a>

</center>
</td></tr></table>

                    
       









</td>

</table>

</body>
</body>
<body>

</body>
</html>
