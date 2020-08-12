<?php
if(isset($_POST['submit']))
{
	//print_r($_FILES);
	$filedir= 'upload/'.''.'.jpg';
    move_uploaded_file($_FILES['pic']['tmp_name'],$filedir);
    header('location: picture.php');
	//echo $filedir;
}


?>