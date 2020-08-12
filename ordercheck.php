<?php
      session_start();
    if(isset($_POST['button']))
    {
        $take_order = $_POST['take_order'];
        $cencel_order = $_POST['cencel_order'];
       

            
            $_SESSION['take_order']   = $take_order;
            $_SESSION['cencel_order']      = $cencel_order;
          

            
            setcookie('take_order', $take_order, time()+3600, '/');
            setcookie('cencel_order', $cencel_order, time()+3600, '/');
           
            
            echo "Cookie set.";

            // var_dump($_COOKIE);
            header('location: order.php');
            
       } 

     else
     {
        echo "Cookie not set.";
    }


?>