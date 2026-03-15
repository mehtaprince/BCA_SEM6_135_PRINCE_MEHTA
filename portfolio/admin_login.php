<?php
session_start();

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

if($username=="prince" && $password=="0000"){
$_SESSION['admin']="true";
header("Location: admin.php");
exit();
}else{
$error="Invalid Login";
}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Login</title>
<link rel="stylesheet" href="admin.css">

</head>

<body>

<div class="login-box">

<h2>Admin Login</h2>

<?php if(isset($error)){ echo "<p class='error'>$error</p>"; } ?>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>