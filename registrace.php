<?php
$title="Registrace";
include ("header.php");
include("mysqli_connect.php");
if(isset($_POST['submit1'])) {
$zprava="";
if(strlen(trim($_POST['username']))>0){
$sql='SELECT username FROM users WHERE username ="'. $_POST['username'] . '"';
//echo $sql;
if($vysledek = mysqli_query($link,$sql)){
if(mysqli_num_rows($vysledek)>0) {
$zprava.="Zadaný username už existuje.<br>";
} 
else{
$username=$_POST['username'];
}
}
else echo mysqli_error($link);
}
else{
$zprava .="Nevyplnil jste pole username. <br>";
}
if(strlen(ltrim($_POST['password']))>0){
if($_POST['password']==$_POST['password1']){
$password=$_POST['password'];
}
else{
$zprava.= "Hesla se neshodují<br>";
}
}
else{
$zprava.="Nevyplnili jste heslo<br>";
}
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $email=$_POST['email'];
    }else{
    $zprava.="Nevyplnili jste E-mail, nebo je v nesprávnem tvaru<br>";
    }
if(strlen($zprava)==0){
echo "Registrace byla úspěšná <br>";
$sql="INSERT INTO users (username,password,email) VALUES('$username',sha1(md5('$password')),'$email')";
if(mysqli_query($link,$sql)){
echo "Vaše registrace proběhla v pořádku. Můžete se
<a href='prihlaseni.php'>přihlásit</a>.";
}
else{
echo mysqli_error($link);
}
}
else{
}
}
else {

?>
<h3>Registrace uživatele</h3>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <p style="font5-weight:bold; text-align:center; font-size:16px">Vyplňte prosím všechny údaje</p>
    <table align="center" style="font-size:12px">
        <tr><td width="150">Username:</td><td><input type="text" name="username"></td></tr>
        <tr><td width="150">E-mail:</td><td><input type="text" name="email"></td></tr>
        <tr><td width="150">Heslo:</td><td><input type="password" name="password"></td></tr>
        <tr><td width="150">Ověření hesla:</td><td><input type="password" name="password1"></td></tr>
        <tr><td width="150"></td><td align="right"><input type="submit" value="odeslat" name="submit1"></td></tr>
    </table>
</form>

<?php
}
  if(isset($_SESSION['username'])){     
  echo "Přihlášen: ".$_SESSION['username']."/<a href='logout.php'>Odhlásit</a>";
  header ("location:user.php");   
  }
  else{
      echo "
      <a class='reg_a1' href='prihlaseni.php'>Přihlaš se</a>"; 
  }
include ("footer.php")
?>