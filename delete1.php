

<!DOCTYPE html>
<html>
<head>
    
 <title>Electronic</title>
    <link rel="icon" href="img/5.png" type="image/x-png">
    <link href="css.css"rel="stylesheet" type="text/css" />
   
 <style type="text/css">
#td
{
padding:5px;
border:1px solid #ccc;
font-family: mtn Brighter sans;
width: 222px;
font-size:14px;

}
</style>
</head>


<center>

<form>

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
<form method="get" action="http://www.mysite.com/search.php"> 
<table cellpadding="0px" cellspacing="0px"> 

</table>
</form>
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
<form>
<table border="0" bordercolor="#003399" height="400" width="820" style="margin-top:22px;>
<tr>
<td width="200">

</td>
<td width="550">


    
    <?php
include('config.php');
$query1=mysql_query("select os_name, system, serial, ram, processor, bios_model , hd from pc");
echo "<table><tr><th id=td>Operating System</td> <th id=td>System Type</td> <th id=td>Serial Number</td> <th id=td>RAM</td> <th id=td>processor</td> <th id=td>Bios Model</th> <th id=td>Hard Disk</th> <th id=td>Delete</th>";

while($query2=mysql_fetch_array($query1))

{
echo "<tr><td id=td>".$query2['os_name']."</td>";
echo "<td id=td>".$query2['system']."</td>";

echo "<td id=td>".$query2['serial']."</td>";
echo "<td id=td>".$query2['ram']."</td>";

echo "<td id=td>".$query2['processor']."</td>";
echo "<td id=td>".$query2['bios_model']."</td>";
echo "<td id=td>".$query2['hd']."</td>";

echo "<td id=td><a href='delete.php?serial=".$query2['serial']."'><img src=delete.png></a></td><tr>";
}
?>
</ol>
</table>                
       









</td>

</table>
</body>
</body>
<body>

</body>
</html>
