<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDY PAGE</title>
    <link rel="stylesheet" href="login.css">
    <link rel="homepage" href="homepage.php">
    <link rel="icon" type="image/x-icon" 
    href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOzo0CZyGwFCr4D2X6wh5IxMa6N_GdlpU_Z0sEvp0&usqp=CAE&s/images/favicon.ico">
</head>
<body>
    
<form action="homepage.php" method="post">
<style>
body {
  background-image: url('https://www.bitsathy.ac.in/wp-content/uploads/About-Card-scaled.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
div {
  background-color: white;
  width: 150px;
  border: 5px blue;
  padding: 25px;
  margin: 10px;
}
</style>
		<div class="login-box">
        <img src="https://moodle.bitsathy.ac.in/pluginfile.php/1/theme_adaptable/logo/1658802280/bit-logo-text.png" alt="BIT" width="295" height="100">
			<h2><I>Study page</I></h2>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Username"
						name="username" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>
             <input class="button" type="submit"
					name="login" value="Sign In">
		</div>
    </form>

    
    
</body>
</html>