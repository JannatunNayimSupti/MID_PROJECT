<?php
      session_start();
    if(isset($_POST['button']))
    {
        $open = $_POST['OPEN'];
        $closed = $_POST['CLOSED'];
       

            
            $_SESSION['OPEN']   = $open;
            $_SESSION['CLOSED']      = $closed;
          

            
            setcookie('open', $open, time()+3600, '/');
            setcookie('closed', $closed, time()+3600, '/');
           
            
            echo "Cookie set.";

            // var_dump($_COOKIE);
            header('location: status.php');
            
       } 

     else
     {
        echo "Cookie not set.";
    }


?>