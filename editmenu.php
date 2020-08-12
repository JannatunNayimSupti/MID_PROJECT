<?php
      session_start();
    if(isset($_POST['submit']))
    {      

            $burger = $_POST['burger'];
            $pizza = $_POST['pizza'];
            $sandwiches = $_POST['sandwiches'];
            $dessert = $_POST['dessert'];
            $icecream = $_POST['icecream'];
            $drinks = $_POST['drinks'];



  $user = ['burger'=> $burger,'pizza'=> $pizza,'sandwiches'=> $sanwiches,
        'dessert'=> $dessert,'icecream'=> $icecream, 'drinks'=> $drinks ,'submit'=> $submit,'submit'=> $submit ];


                   $_SESSION['burger']   = $burger;
                   $_SESSION['pizza']   = $pizza;
                   $_SESSION['sandwiches'] = $sandwiches;
                   $_SESSION['dessert']    = $dessert;
                   $_SESSION['icecream']    = $icecream;
                   $_SESSION['drinks']    = $drinks;
                    $_SESSION['submit']    = $submit;
                    $_SESSION['submit']    = $submit;
                   $_SESSION['user'] = $user;


                   setcookie('burger', $burger, time()+3600, '/');
                   setcookie('pizza', $pizza, time()+3600, '/');
                   setcookie('sandwiches', $sandwiches, time()+3600, '/');
                   setcookie('dessert', $dessert, time()+3600, '/');
                   setcookie('icecream', $icecream, time()+3600, '/');
                   setcookie('drinks', $drinks, time()+3600, '/');
                   setcookie('submit', $submit, time()+3600, '/');
                   setcookie('submit', $submit, time()+3600, '/');
           
                   header('location: manipulate_menu.php');
        }
    
    else
    {
        echo "cookie not set";
    }
        

       

?>