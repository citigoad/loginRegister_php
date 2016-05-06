<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}

if(isset($_POST['btn-signup']))
{
 $uname = $_POST['username'];
 $email = $_POST['email'];
 $upass = $_POST['password'];

  $conn = mysqli_connect('127.0.0.1', 'atma', 'atma','cib283');
 
 if(mysqli_query($conn,"insert into person (person_id,email,password) values ('$uname', '$email', '$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<p> Login and Reigstration application</p>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="username" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="login.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
