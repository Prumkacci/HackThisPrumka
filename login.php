
<?php 
include ("mysqli_connect.php"); 

$username=mysqli_real_escape_string($link,$_POST['username']);
$password=mysqli_real_escape_string($link,$_POST['password']);
$sql="SELECT id,username,email FROM users WHERE password=sha1(md5('$password')) and username='$username'";

if($vysledek=mysqli_query($link, $sql)){
    if(mysqli_num_rows($vysledek)>0){
    session_name("users");
    session_start(); 
    while($radek=mysqli_fetch_assoc($vysledek)){
    $_SESSION['username']=$radek['username'];
    $_SESSION['id']=$radek['id'];
    $_SESSION['email']=$radek['email'];
    } 
    header("location:index.php");
    exit;
    }
    else{
    header ("location:spatne_prihlaseni.php");
    exit;
    } 
    }
    else{
    echo mysqli_error($link); 
    } 

?>
