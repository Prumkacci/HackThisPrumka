<?php 
session_name("users"); 
session_start(); 
include ("mysqli_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <title>User</title>
</head>
<body>
    </div>
    <?php   
  if(isset($_SESSION['username'])){  
    echo "Přihlášen: <a href='user.php'>".$_SESSION['username']."</a> | <a href='logout.php'>Odhlásit</a>";
    
      }
      else{
        header ("location:index.php");
        exit;
      }
$username = $_SESSION['username'];
$sql2="SELECT * FROM users WHERE username = '$username'";
if ($vysledek2=mysqli_query($link,$sql2)){
echo "<table>";                              
    while ($radek=mysqli_fetch_array($vysledek2)){
        $pocet = $radek["restart"] + "0";
        echo "<tr><td>id</td><td>username</td><td>email</td><td>Číslo</td></tr>";
        echo "<tr><td>" . $radek["id"]. "</td><td>" . $radek["username"]. "</td><td>" . $radek["email"]. "</td><td>" . $pocet . "/3</td></tr></table>";
        if(isset($_POST['submit1'])){
            if($radek["restart"]<3){
                $zprava="Záznam byl upraven";
                $sql="UPDATE users SET restart=restart+1 WHERE username='$_SESSION[username]'";
            if($vysledek=mysqli_query($link, $sql)){
            header("Refresh:0");
            //echo $zprava;
            }
            }else{
                echo "Víc už nemůžeš, máš ".$radek["restart"].".";
            }
        }
        else{
            echo mysqli_error($link);
        }
        if(isset($_POST['submit'])){
                $zprava="Záznam byl upraven";
                $sql="UPDATE users SET restart=0 WHERE username='$_SESSION[username]'";
            if($vysledek=mysqli_query($link, $sql)){
            header("Refresh:0");
            //echo $zprava;
            }
        }
        else{
            echo mysqli_error($link);
        }
    }
    }
    else {
    echo mysqli_error($link);
    }  
  ?>                 
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <input type="submit" name="submit1" value="přidat">
  </form><br>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <input type="submit" name="submit" value="obnovit počet">
  </form>     
<?php
 echo "<br><a href='messages.php'>Messages</a>";
 include ("footer.php")
?>