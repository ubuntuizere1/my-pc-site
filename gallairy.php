<?php

$hostname = "localhost";

$database = "esms";

$username = "root";

$password = "";
$conn = mysql_connect($hostname, $username, $password);

mysql_select_db($database, $conn);


if (!isset($_SESSION)) {
  session_start();
}

?>


<!DOCTYPE html>
<html>
<head>
    
 <title>Electronic</title>
    <link rel="icon" href="img/5.png" type="image/x-png">
    <link href="css.css"rel="stylesheet" type="text/css" />
   
    <style>
       
#p{
  padding: 2px;

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
<b>Hello  <?php echo $_SESSION['name'] ?><b></font></center>
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
            <a class="top-heading" href="search.php">Search</a>            </li>
                   <li class="no-sub">
            <a class="top-heading" href="logout.php">Logout</a>            </li>
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
<table border="0" bordercolor="#003399" height="488" width="800" id="p" style="margin-top:-66px;">
<tr>
<td width="222" style="text-align:top;">

     <h1 style =font-size:45px;>lenovo computer</h1>
<img src="lenovo.jpg " style="width:350px; height:100px;">
</td>
<td>
<h2 style =font-size:45px;>toshiba computer</h2>
<img src="toshiba.jpg " style="width:350px; height:100px;">
</td>
<td>
<h3 style =font-size:50px;>HP computer</h3>
<img src="HP.jpg " style="width:350px; height:100px;">
</td>
<tr>
  <td>
   <h4 style =font-size:40px;>p1 computer</h4>
<img src="p1.jpg " style="width:300px; height:100px;"> </td>
<td>
   <h4 style =font-size:40px;>acer computer</h4>
<img src="acer.jpg " style="width:300px; height:100px;"> </td>
<td>
   <h5 style =font-size:40px;>apple computer</h5>
<img src="apple.jpg " style="width:300px; height:100px;"> </td>
</tr>
</tr>
<tr>
  <marquee   direction="right"><p align="center" style="margin-top: 0px; font-size: 40px; color: gren; "> Welcom to BOOM COMPUTER CENTER System </p></marquee>
<footer style="font-size: 25px; text-align: center;; padding-left: 45px; background-color: green;"> BOOM COMPUTER CENTER @ sept 2021 </footer>
</div>
       


                    
       









</td>

</table>
</body>
</body>
<body>

</body>
</html>
