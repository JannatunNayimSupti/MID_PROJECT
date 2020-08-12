<?php
      session_start();
    if(isset($_POST['button']))
    {
        $comment = $_POST['comment_box'];
       
       

            
            $_SESSION['comment_box']   = $comment;
           
          

            
            setcookie('comment_box', $comment, time()+3600, '/');
            
           
            
            echo "Cookie set.";

            // var_dump($_COOKIE);
            header('location: comment_box.php');
            
       } 

     else
     {
        echo "Cookie not set.";
    }


?>