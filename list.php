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
$query1=mysql_query("select fname, lname, username, pass, phone, age,address from login");
echo "<table><tr><td>first Name</td> <td>last name</td> <td>username</td> <td>pass</td> <td>phone </td> <td>age</td> <td>address</td> <td>Edit</td> <td>Delete</td>";

while($query2=mysql_fetch_array($query1))

{
echo "<tr><td>".$query2['fname']."</td>";
echo "<td>".$query2['lname']."</td>";

echo "<td>".$query2['username']."</td>";
echo "<td>".$query2['pass']."</td>";

echo "<td>".$query2['phone']."</td>";
echo "<td>".$query2['age']."</td>";
echo "<td>".$query2['address']."</td>";

echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query2['id']."'>delete</a></td><tr>";
}
?>
</ol>
</table>
</body>
</html>

