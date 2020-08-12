<?php
      session_start();
    if(isset($_POST['button']))
    {
        $bill = $_POST['bill'];
        $vat = $_POST['vat'];
        $discount = $_POST['discount'];
       

            
            $_SESSION['bill']   = $bill;
            $_SESSION['vat']      = $vat;
            $_SESSION['discount']   = $discount;
          

            
            setcookie('bill', $bill, time()+3600, '/');
            setcookie('vat', $vat, time()+3600, '/');
            setcookie('discount', $discount, time()+3600, '/');
           
            
            echo "Cookie set.";

            // var_dump($_COOKIE);
            header('location: set_discount.php');
            
       } 

     else
     {
        echo "Cookie not set.";
    }


?>