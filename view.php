

<!DOCTYPE html>
<html>
<head>
    
 <title>Electronic</title>
    <link rel="icon" href="img/5.png" type="image/x-png">
    <link href="css.css"rel="stylesheet" type="text/css" />
   
    <style>
	
	
	#idd
	{
padding:5px;
border:1px solid #ccc;
font-family: mtn Brighter sans;
font-size:15px;}
	
	
	
	
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
<center><font face="mtn brighter sans">


</font></center>
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

<td width="550">
<table border="0"  style="margin-top:11px; ">
<tr>
<th width="144" id="idd">ID</th>
<th width="144" id="idd">Operating System</th>
<th width="144" id="idd">System Type</th>
<th width="144" id="idd">Serial Number</th>
<th width="144" id="idd">RAM</th>
<th width="144" id="idd">Proceesor</th>
<th width="144" id="idd">Bios Model</th>
<th width="144" id="idd">Hard Disk</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "esms");
if ($conn-> connect_error)
{
die("connection failed:". $conn-> connect_error);
}                  
$sql = "select * from pc";
$result = $conn-> query($sql);
if ($result-> num_rows > 0)
{
while ($row = $result-> fetch_assoc ())
{

echo "<tr><td id=idd>". $row["id"]. "</td><td id=idd>". $row["os_name"]. "</td><td id=idd>". $row["system"]. "</td><td id=idd>". $row["serial"]. "</td><td id=idd>". $row["ram"]. "</td><td id=idd>". $row["processor"]. "</td><td id=idd>". $row["bios_model"]. "</td><td id=idd>". $row["hd"]. "</td></tr>";
}
echo "</table>";
}
else
{

echo "o result";


}
$conn-> close();
?>


</td>

</table>
</body>
</body>
<body>

</body>
</html>
