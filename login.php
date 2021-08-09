<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" type="png" href="EuLogin.png" />
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css" />
</head>

<body>
	<!DOCTYPE html>
	<html>

	<head>
		<link rel="shortcut icon" type="png" href="images/icon/favicon.png" />
		<title>Login SignUp</title>
		<link rel="stylesheet" type="text/css" href="loginStyle.css" />
	</head>

	<body>
		<div class="form-box">
			<div>
				<img class="login-logo" src="EuLogin.png" alt="" />
			</div>
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff">
					Log In
				</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">
					Register
				</button>
			</div>

			<!-- Login Form -->
			<form id="login" class="input-group" action="php/signin.php" method="POST">
				<div class="inp">
					<img src="images/icon/user.png" /><input type="text" name="id" class="input-field" placeholder="ID" style="width: 88%; border: none" required="required" />
				</div>
				<div class="inp">
					<img src="images/icon/password.png" /><input type="password" name="pass" class="input-field" placeholder="Password" style="width: 88%; border: none" required="required" />
				</div>
				<input type="checkbox" class="check-box" />Remember Password
				<button type="submit" name="login" class="submit-btn">
					Log In
				</button>
				<p class="admission">
					If you are not a student of Eastern University<a class="admission-link" href="https://webportal.easternuni.edu.bd/onlineadmission/Admission.aspx">click here to take admission
					</a>
				</p>
			</form>

			<!-- Registration Form -->
			<form id="register" class="input-group" action="php/register.php" method="POST">
				<input type="number" name="uid" class="input-field" placeholder="ID" required="required" />
				<input type="text" name="department" class="input-field" placeholder="Department" required="required" />
				<input type="password" name="createpass" class="input-field" placeholder="Create Password" required="required" />
				<input type="password" name="psw" class="input-field" placeholder="Confirm Password" required="required" />
				<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()" />I agree to the Terms & Conditions <br /><button type="submit" id="btnSubmit" name="submit" style="
								background-color: green;
								padding: 10px 70px;
								border-radius: 50rem;
								outline: none;
								border: none;
								color: white;
							">
					Register
				</button>
			</form>
		</div>
		<script type="text/javascript" src="script.js"></script>
	</body>

	</html>
</body>

</html>