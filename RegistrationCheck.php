<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', '', 'midproject');

        $name     = $_POST['name'];
        $uname    = $_POST['userName'];
        $userType = $_POST['userType'];
        $email    = $_POST['email'];
        $password = $_POST['pass'];
        $confirmPassword = $_POST['confirmPassword'];
        $Gender = $_POST['gender'];
        $dob = $_POST['year']."/".$_POST['month']."/".$_POST['day'];
        $date = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

         if(empty($name) || empty($uname) || empty($userType) || empty($email) || empty($password) || empty($confirmPassword) || empty($Gender) || empty($year) ||empty($month) || empty($date))
        {
            echo "please submit all information".'<a href="registration.php"><u>Home</a>';
        }
        else 
        {

            if($password == $confirmPassword)
            {
                $query = "INSERT INTO userinfo (name, userName, email, password, dateOfBirth, userType, gender) VALUES ('$name', '$uname','$email', '$password', '$dob', '$userType', '$Gender' )";
                $result = mysqli_query($conn, $query);

                header('location: login.php');
               
            }
            else
            {
                 echo "your password and confirm password didn't match!".'<a href="registration.php"><u>Home</a>';
            }

    
        
        }
}
   
?>