<?php
 session_start();


if(isset($_POST['submit'])){
 
   $conn = mysqli_connect('localhost', 'root', '', 'midproject');

       if(empty($_POST['userName']) || empty($_POST['pass'])){
           header('location: login.php?msg=Invalid_please_check_again');
       }
       else{ $uname = $_POST['userName'];
           $password = $_POST['pass'];
           $query = "SELECT * FROM userinfo WHERE UserName = '$uname' AND Password = '$password'";
           $result = mysqli_query($conn, $query);

           while( $row = mysqli_fetch_assoc($result) ){
               
               $Cname     = $row['name'];
               $Cemail    = $row['email'];
               $Cusername = $row['userName'];
               $Cpassword = $row['password'];
               $Cdob      = $row['dateOfBarth'];
               $CuserType = $row['userType'];

               if(($uname == $Cusername) && ($password == $Cpassword)){
                   if($CuserType == 'Admin'){

                  $user = ['name'=> $Cname,'userName'=> $Cusername,'userType'=> $CuserType,'email'=> $Cemail,'pass'=> $Cpassword,'dob'=> $Cdob];


                   $_SESSION['name']   = $Cname;
                   $_SESSION['userName']   = $Cusername;
                   $_SESSION['userType'] = $CuserType;
                    $_SESSION['email']   = $Cemail;
                   $_SESSION['pass']    = $password;
                   $_SESSION['dob']    = $Cdob;
                   $_SESSION['user'] = $user;


                   setcookie('name', $Cname, time()+3600, '/');
                   setcookie('userName', $Cusername, time()+3600, '/');
                   setcookie('userType', $CuserType, time()+3600, '/');
                   setcookie('email', $Cemail, time()+3600, '/');
                   setcookie('dob', $Cdob, time()+3600, '/');
                   setcookie('pass', $password, time()+3600, '/');
           
                   header('location: dashBoard.php');
                   }
                   /* else if($CuserType == ''){
                       header('location: registration.php');
                   }*/
               }
           }
       }
   }  
else
{
   echo "sorry!!";
}
?>
           