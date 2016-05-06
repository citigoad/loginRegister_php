<?php



session_start();

 echo "Welcome  ".$_SESSION['user']."!. you are successfully registered!";


 if(isset($_POST['btn-logout']))
{

unset($_SESSION['user']);

}

error_reporting(E_ALL); ini_set('display_errors', 1);

?>



<html>
<body>

<SCRIPT>
function calculate(form) {
var num=parseInt(form.number.value);
if (isNaN(num) || num < 0) {
form.result.value=(form.number.value + " is not a valid number!  Try again!");
}
if (num == 1 || num == 2) {
form.result.value=(num + " is prime!");
}
for (var i=2;i<num;i++) {
if (num % i == 0) {
var prime="yes";
form.result.value=(num + " is not prime.  It is divisible by " + i + ".");
break;
}
if (num % i != 0) var prime="no";
}
if (prime == "no") form.result.value=(num + " is prime!");
} 
</SCRIPT>

<div id="logout" align="right">
<form action="session_unset.php">

<button type="submit" name="btn-logout">Logout</button>
<form>
</div>

<center>
<form name=form>
<h2>Prime Number Calculator</h2><p>
Please enter a number:<br>
<input type=text name=number size=7>
<input type=button value="Calculate" onClick="calculate(this.form)">
<P>
<input type=text name=result size=45 value="">
</form>
</center>



</body>
</html>
