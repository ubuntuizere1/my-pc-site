<html>

<head>

<style type="text/css">
td
{
padding:5px;
border:1px solid #ccc;

}
</style>

</head>


<body>
<?php
include('config.php');
if(isset($_GET['serial']))
{
$serial=$_GET['serial'];
$query1=mysql_query("delete from pc where serial='$serial'");
echo '<div align="bottom"><font color=green> COMPUTER DELETED SUCCCESSFULL</font><br></div>';
echo "<META http-equiv=refresh content=1;URL=delete1.php>";
if($query1)
{
	('location:delete1.php');

}
}
?>
</body>
</html>

 