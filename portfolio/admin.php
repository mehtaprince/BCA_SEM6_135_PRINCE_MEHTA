<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
exit();
}

$conn=mysqli_connect("localhost","root","","portfolio");

if(isset($_GET['delete'])){
$id=$_GET['delete'];
mysqli_query($conn,"DELETE FROM contact WHERE id=$id");
header("Location: admin.php");
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Panel</title>
<link rel="stylesheet" href="admin.css">

</head>

<body>

<div class="admin-container">

<a class="logout" href="logout.php">Logout</a>

<h2>Contact Messages</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Action</th>
</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM contact ORDER BY id DESC");

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['message']."</td>";

echo "<td><a class='delete' href='admin.php?delete=".$row['id']."'>Delete</a></td>";

echo "</tr>";

}

?>

</table>

</div>

</body>
</html>