<?php
$title="Přihlášení"; 
?> 

<p style="font-weight:bold; font-size:16px">Přihlášení</p> <br>  

<form action="login.php" method="POST">   
<table style="font-size:12px">    
<tr><td>Username: </td><td><input type="text" name="username"></td></tr> 
<tr><td>Heslo: </td><td><input type="password" name="password"></td></tr>     
<tr><td colspan="2" align="right"><input type="submit" name="submit" value="Přihlásit"></td></tr> 
</table> 
</form> 
    <?php   
  if(isset($_SESSION['username'])){     
  echo "Přihlášen: ".$_SESSION['username']."<br><a href='logout.php'>Odhlásit</a>";
  header ("location:user.php");   
  }
  else{
  
      
  }

?>