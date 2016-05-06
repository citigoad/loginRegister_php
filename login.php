<?php
session_start();


if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
 $email = $_POST['email'];
 $upass = $_POST['password'];

  $conn = mysqli_connect('127.0.0.1', 'atma', 'atma','cib283');

 $res=mysqli_query($conn,"SELECT person_id, password FROM person WHERE email='$email'");
 $row=mysqli_fetch_array($res);
 if($row['password']==$upass)
 {
  $_SESSION['user'] = $row['person_id'];
  header("Location: home.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<head>

<title>Login</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<p id="login">Please login here. </p>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
