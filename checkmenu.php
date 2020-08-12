<?php
      session_start();
    if(isset($_POST['submit']))
    {
        if(empty($_POST['burger']) || empty($_POST['pizza']) || empty($_POST['sandwiches']) || empty($_POST['dessert']) || empty($_POST['icecream']) || empty($_POST['drinks']))
        {
            echo "please fillup all";
        }
        else 
        {
            $burger = $_POST['burger'];
            $pizza = $_POST['pizza'];
            $sandwiches = $_POST['sandwiches'];
            $dessert = $_POST['dessert'];
            $icecream = $_POST['icecream'];
            $drinks = $_POST['drinks'];
            
            setcookie('burger', $burger, time()+3600, '/');
            setcookie('pizza', $pizza, time()+3600, '/');
            setcookie('sandwiches', $sandwiches, time()+3600, '/');
            setcookie('dessert', $dessert, time()+3600, '/');
            setcookie('icecream', $icecream, time()+3600, '/');
            setcookie('drinks', $drinks, time()+3600, '/');
           
            
            echo "cookie set";

            header('location: menu.php');
        }
    }
    else
    {
        echo "cookie not set";
    }

?>