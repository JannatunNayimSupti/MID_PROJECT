
<!DOCTYPE html>
<php>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr >
    <td colspan="2" width="900px"><img width="250px" align="left" src="img/f1.jpg"/><h2>FOOD FIGHT</h2>
        <h4>RESTURENT</h4>
      <ul align="right"> Logged in as
        <a href="dashBoard.php"><?=$_COOKIE['name']?></a>|
        <a href="logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
  	<td>
		<ul>
			<li><a href="dashBoard.php"> Dashboard </a></li>
			<li><a href="profile.php"> View Profile </a></li>
			<li><a href="editProfile.php"> Edit Profile </a> </li>
			<li><a href="picture.php"> Change Profile Picture </a></li>
			<li><a href="change_password.php"> Change Password </a></li>
			<li><a href="logout.php"> Logout </a> </li>
            <li><a href="delete_account.php"> Delete Account </a> </li>
            <li><a href="menu.php"> Menu </a> </li>
            <li><a href="manipulate_menu.php"> Manipulate Menu </a> </li>
            <li><a href="order.php"> Order </a> </li>
            <li><a href="set_discount.php"> Set Discount </a> </li>
            <li><a href="status.php"> Status </a> </li>
             <li><a href="comment_box.php"> Comment Box </a> </li>
		</ul>
	</td>
	<td width="60%">
		<form>
            <fieldset>
    <legend><b>MANIPULATE MENU</b></legend>
    <form action="menucheck.php" method="post" enctype="multipart/form-data">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td>Burger</td>
                <td>:</td>
                <td><input name="burger" type="text" ></td>
                <td></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
             <tr>
                <td>Pizza</td>
                <td>:</td>
                <td><input name="pizza" type="text" ></td>
                <td></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Sandwiches</td>
                <td>:</td>
                <td><input name="sandwiches" type="text" ></td>
                <td></td>
            </tr>
             <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Dessert</td>
                <td>:</td>
                <td><input name="dessert" type="text" ></td>
                <td></td>
            </tr>

             <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Ice Cream</td>
                <td>:</td>
                <td><input name="icecream" type="text" ></td>
                <td></td>
            </tr>

             <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Drinks</td>
                <td>:</td>
                <td><input name="drinks" type="text" ></td>
                <td></td>
            </tr>




            
        </table>
        <hr/>
       <a href="addfood.php"> Add to Menu?</a> <br>
    </form>
</fieldset>
        </form>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>

</body>
</html>