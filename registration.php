<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr>
    <td width="800px"><img width="250px" align="left" src="img/f1.jpg"/><h2><b><i>FOOD FIGHT</i></b></h2>
        <h4><b><i>RESTURENT</i></b></h4>
        <ul aligh="right" >
        <a href="home.php"><i>Home</i></a>|
        <a href="login.php"><i>Login</i></a>|
        <a href="registration.php"><i>Registration</i></a>
      </ul>
    </td>
  </tr>

  <tr height="500px">
    <td>
        <fieldset>
    <legend><b><i>REGISTRATION</i></b></legend>
	<form action="RegistrationCheck.php" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td><i>Name</i></td>
				<td>:</td>
				<td><input align="right" name="name" type="text" size="50%"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td><i>User Name</i></td>
				<td>:</td>
				<td><input  name="userName" type="text"  size="50%"></td>
				<td></td>
			</tr>

			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td><i>User Type</i></td>
				<td>:</td>
				<td><input  name="userType" type="text" size="50%"></td>
				<td></td>
			</tr>

			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td><i>Email</i></td>
				<td>:</td>
				<td>
					<input  name="email" type="text" size="50%">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td><i>Password</i></td>
				<td>:</td>
				<td> <input  name="pass" type="password" size="50%"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td><i>Confirm Password</i></td>
				<td>:</td>
				<td><input  name="confirmPassword" type="password" size="50%"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend><i>Gender</i></legend>    
						<select name="gender" id="" >
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend><i>Date of Birth</i></legend>   
						<input type="text" size="2" name="day"/> 
						<input type="text" size="2" name="month" />/
						<input type="text" size="4" name="year" />/
					
						<font size="2"><b>(dd/mm/yyyy)</b></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Confirm" name="submit">
		<input type="reset" value="Reset">
	</form>
</fieldset>
    </td>
  </tr>

  <tr>
    <td align="center">copyright@2017</td>
  </tr>
</table>

</body>
</html>