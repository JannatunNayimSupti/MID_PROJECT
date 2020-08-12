<?php
 session_start();


if(isset($_POST['submit'])){
               
               $burger     = $_POST['burger'];
               $pizza    = $_POST['pizza'];
               $sandwiches = $_POST['sandwiches'];
               $dessert = $_POST['dessert'];
               $icecream     = $_POST['icecream'];
               $drinks = $_POST['drinks'];

               if(empty($burger)|| empty($pizza)||empty($sandwiches)||empty($dessert)||empty($icecream)||empty($drinks))
               {
                echo "null submission";
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

            header('location: addfood.php');
else
{
   echo "sorry cookie no set!!";
   //header('location: manipulate_menu.php')
}
?>