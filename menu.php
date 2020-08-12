
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
    <form action="checkmenu.php" method="post">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td>Burger <br>  <ul>
            <li> Chicken Burger______120/= </li><img width="250px" align="right" src="img/b1.jpg"/>
            <li> Beef Burger________150/=</li>
            <li>Double Chicken Burger_______220/=</li>
            <li> Double Beef Burger_____250/=</li>
            <li> Chicken Crunch Burger______230/=</li>
            <li>Student Burger______150/= </li>
            <li>Jumbo Burger______350/= </li>
            <li>Naga Burger_____280/=</li>

           
        </ul>
        <hr>
         </td>
               
            </tr>

             <tr>
                <td>Pizza <br>  <ul>
            <li> BBQ Pizza </li><img width="200px" align="right" src="img/p1.jpg"/>
            <li> Mushroom Spice Pizza______350/= </li>
            <li>Chicken Sausage Pizza______420/=</li>
            <li> Olive Special Pizza______400/=</li>
            <li> Smoky Chicken Pizza______550/=</li>
            <li>Chicken Fiesta Pizza______480/= </li>
            <li>Pepperoni Chicken Sausage Pizza______600/= </li>
            <li>Classic Pizza______650/=</li>
           
        </ul>
        <hr>
         </td>
               
            </tr>
              <tr>
                <td>Sandwiches <br>  <ul>
            <li> BBQ Sandwich______120/= </li><img width="200px" align="right" src="img/s1.jpg"/>
            <li> Mushroom Spice Sandwich______150/=</li>
            <li>Chicken Sausage Sandwich______220/=</li>
            <li> Olive Special Sandwich______180/=</li>
            <li> Smoky Chicken Sandwich______170/=</li>
            <li>Chicken Fiesta Sandwich______280/= </li>
            <li>Pepperoni Chicken Sausage Sandwich______250/= </li>
            <li>Classic Sub Sandwich______300/=</li>
           
        </ul>
        <hr>
         </td>
               
            </tr>
             <tr>
                <td>Dessert <br>  <ul>
            <li> Sweet Cherry Dessert ______220/=</li><img width="200px" align="right" src="img/d1.jpg"/>
            <li> Apple Dumpling______180/=</li>
            <li>Banana Pudding______170/=</li>
            <li> Boston Cream Pie ______250/=</li>
            <li>Chocolate Brownie______220/=</li>
            <li>Pumkin Pie______180/=</li>
           
        </ul>
        <hr>
         </td>
               
            </tr>
         <tr>
                <td>Ice Cream <br>  <ul>
            <li> Lemon Ice_Cream______180/= </li><img width="250px" align="right" src="img/i1.jpg"/>
            <li> Strawberry Ice_Cream______150/=</li>
            <li>Cocunut Ice_Cream______280/=</li>
            <li> Banana And Venilla Split______250/=</li>
            <li>Chocolate Chips Ice_Cream ______300/=</li>
            <li>Nutty Sundae______280/= </li>

           
        </ul>
        <hr>
         </td>
               
            </tr>

             <tr>
                <td>Drinks <br>  <ul><img width="200px" align="right" src="img/d2.jpg"/>
            <li> Lemonade ______180/= </li>
            <li> Strawberry Shake ______150/=</li>
            <li> Chocolate Milk Shake______280/=</li>
            <li> Oreo Chocolate Shake______250/=</li>
            <li>Chocolate COffe______380/= </li>
            
           
        </ul>
        <hr>
         </td>
               
            </tr>




            
        </table>
        <hr/>
        
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