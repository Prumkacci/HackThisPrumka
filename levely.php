
<?php

$link = mysqli_connect('localhost', 'nov', 'Ondra2580,', 'HackThisPrumka');
    if (!$link) 
    {
    echo "Chyba při připijení do db";
    }
    $sql = 'SELECT username,Basic1,Basic2,Basic3,Basic4,Basic5,Basic6,Basic7,Basic8,Basic9,Basic10 FROM ukoly WHERE username = "'. $_SESSION['username'] . '"';
    if($vysledek = mysqli_query($link,$sql))
                {
                  if(mysqli_num_rows($vysledek)>0) 
                  {
                    $Value = $vysledek->fetch_object();
                    for($i = 1; $i <= 10; $i++)
                    {
                        $pomocna = "Basic".$i;
                      if($Value->$pomocna != NULL){
                            echo"<br/><a href=Quest$i>Basic $i</a> ✓";
                      }
                      else
                      {
                            echo"<br/><a href=Quest$i>Basic $i</a>";
                      }  
                    }
                  }
                }
/*if(isset($_SESSION['username'])){
    echo"<br/><a href=Quest1>Basic 1</a>
    <br/><a href=Quest2>Basic 2</a>
    <br/><a href=Quest3>Basic 3</a>
    <br/><a href=Quest4>Basic 4</a>
    <br/><a href=Quest5>Basic 5</a>
    <br/><a href=Quest6>Basic 6</a>
    <br/><a href=Quest7>Basic 7</a>
    <br/><a href=Quest8>Basic 8</a>
    <br/><a href=Quest9>Basic 9</a>
    <br/><a href=Quest10>Basic 10</a>";

}*/
    

?>