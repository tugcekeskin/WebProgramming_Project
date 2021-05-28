<?php

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEBIS</title>
    <link rel="stylesheet" href="MainPage.css">
    <script src="./LoginFunction.js"></script>
	<link rel="stylesheet" href="Header-Background.css">
</head>
<body>

	<div class="header">
        <ul class="flex-header-container">
            <li class="flex-header-item"><img class="header-logo" src="logo.jpg" alt=""></li>
        </ul>
    </div>

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="secretary" value="secretary" checked><label for="tab-1" class="tab">Secretary</label>
		<input id="tab-2" type="radio" name="tab" class="instructor" value="instructor"><label for="tab-2" class="tab">Instructor</label>
        <input id="tab-3" type="radio" name="tab" class="student" value="student"><label for="tab-3" class="tab">Student</label>
		<div class="login-form">
			<div class="secretary-htm">
                <div class="group">
					<label for="user" class="label">First Name</label>
					<input id="user" type="text" class="input">
				</div>
                <div class="group">
					<label for="user" class="label">Last name</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" onclick="Login()">
				</div>
				<div class="hr"></div>	
			</div>

			<div class="instructor-htm">
				<div class="group">
					<label for="user" class="label">First Name</label>
					<input id="user" type="text" class="input">
				</div>
                <div class="group">
					<label for="user" class="label">Last name</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" onclick="Login()">
				</div>
				<div class="hr"></div>				
			</div>

            <div class="student-htm">
				<div class="group">
					<label for="user" class="label">First Name</label>
					<input id="user" type="text" class="input">
				</div>
                <div class="group">
					<label for="user" class="label">Last name</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" onclick="Login()">
				</div>
				<div class="hr"></div>				
			</div>
		</div>
	</div>
</div>
</body>
</html>
