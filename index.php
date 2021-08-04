<?php
// MySQL connection variables
// Server name 
$hostname = "localhost";
// Name of the MySQL database
$database = "esms";
// Login mysql user
$username = "root";
// Login mysql password
$password = "";

// Connection String
$conn = mysql_connect($hostname, $username, $password);
// MySQL select database
mysql_select_db($database, $conn);

//registering a login session
if (!isset($_SESSION)) {
  session_start();
}

?>
<html>
<head>








<title>Eletronic
</title>



<style>

#title
{
font-size:32px;


background-color:#00c6ff;
font-family:"Bodoni MT Black";

             
}
#user
{
background:#ffffff;
font-size:20px;

}
#user:hover
{

box-shadow: 1px 0px 5px 2px #ffffff;

}

#login{


height:33px;
width:111px;
background-color:#00c6ff;

font-family: MTN Brighter Sans;
}


#login:hover{

height:33px;
width:111px;
background-color:grey;

font-family: MTN Brighter Sans;
}

a{
text-decoration:none; font-family:MTN Brighter Sans;
color:black;

}
a:hover{
font-size:large;
color:blue;
}
</style>
</head>
<body bgcolor="white">
<form action="index.php" method="post" name="login" >
<table border="0"width="500" height="300"  border color="white" style="margin-left:444px; margin-top:111px;" id="table">
<tr height="60" bgcolor="">
<td colspan="3" id="title" style="text-align:Center;"><font face="MTN Brighter Sans" color="white">Sign IN</font></td>



</tr>
<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Username</b></font></td><td colspan="2"> 


<input type="text" size"23" name="name"  id="user" required/></td></tr>
<tr height="44"><td id="input">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="MTN Brighter Sans"><b>Password</b></font></td><td colspan="2">

<input type="password" name="pass"  id="user" required/></td></tr>


<tr height="44"><td colspan="3"><center><input name="SubmitButton" id="login" type="submit"value="Login">&nbsp;&nbsp;&nbsp;


<a href="signup.php" > Sign Up Here</a>

</center>

<?php 


//if the login form is submitted
if (isset($_POST['SubmitButton'])) { // if form has been submitted

//if (!get_magic_quotes_gpc()) {
//$_POST['email'] = addslashes($_POST['email']);
//}

$pass = $_POST['pass'];
$name = $_POST['name'];
$check = mysql_query("SELECT * FROM login where name = '$name'")or die(mysql_error());

$info = mysql_fetch_array( $check );

$pass = $info['pass'];
$name = $info['name'];


echo "<div class=error>";

//Gives error if user dosen't exist
$check2 = mysql_num_rows($check);

if ($check2 == 0) { echo "<br/><br/><div style='background-color:Black; text-align:center;'><font face='MTN Brighter Sans' color='white' SIZE='2'>Invalid Username And Password</font></div>";
}

 else if ($pass != $pass){
echo "<br/><br/><div style='background-color:Black; text-align:center;'><font face='MTN Brighter Sans' color='white' SIZE='2'>Incorrect password</font></div>";

}



else{

$_SESSION['name'] = $name;
$_SESSION['password'] = $password;
//then redirect them to the members area 

echo '<div align="bottom"><font color=green><font size="+1"><img src=loading.gif height=55 width=55 style=margin-left:666px; margin-left:-222px></font><br></div>';
echo "<META http-equiv=refresh content=2;URL=home.php>";

}

echo "</div>";

}

?>
		

</td></tr></table>
</body></html>
