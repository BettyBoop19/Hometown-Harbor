<?php
include_once('config.php');
$message = "";
if (isset($_POST['loginButton'])) {
$enteredUsername = $_POST['userName'];
$enteredPassword = $_POST['password'];
$query = "SELECT * FROM Registered_Data WHERE USER_NAME = '$enteredUsername' AND PASSWORD = 
'$enteredPassword'";
$result = mysqli_query($conn, $query);
if ($result && mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
$loggedInUsername = $row['USER_NAME'];
header("Location: index.php?username=$loggedInUsername");
exit();
} else {
$message = 'Invalid username or password';
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
body {
width: 100%;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
background-color: white;
color: black;
font-family: Arial, Helvetica, sans-serif;
}
form {
width: 22%;
max-width: 300px;
height: auto;
display: flex;
flex-direction: column;
gap: 1rem;
border-radius: 10px;
background-image: 360deg, #2193b0, #6dd5ed;
box-shadow: 2px 2px 10px #333;
padding: 15px;
}
h1 {
text-align: center;
}
label {
font-weight: bold;
}
input {
width: 100%;
height: 35%;
border-radius: 5px;
outline: none;
padding: 0 10px;
font-size: 14px;
border: 1px solid grey;
}
input[type="submit"],
input[type="button"] {
width: 100%;
padding: 10px;
font-size: 16px;
border: none;
border-radius: 5px;
cursor: pointer;
}
input[type="submit"]:hover,
input[type="button"]:hover {
cursor: pointer;
}
input[type="submit"]:active,
input[type="button"]:active {
opacity: .7;
}
.messageContainer {
display: flex;
justify-content: center;
align-items: center;
font-size: 16px;
}
.linkContainer {
display: flex;
justify-content: space-between;
margin-bottom: 20px;
}
.linkContainer p {
text-decoration: underline;
cursor: pointer;
}
</style>
</head>
<body>
<form action="" method="post">
<h1>Login</h1>
<label for="userName">User Name:</label>
<input type="text" placeholder="Enter your username" name="userName" required>
<label for="password">Password:</label>
<input type="password" placeholder="Enter your password" name="password" required>
<input type="submit" value="Login" name="loginButton">
<input type="button" value="Cancel" onclick="cancel();">
<div class="linkContainer">
<a href="forget.php">Forgot Password?</a>

<a href="register.php">Register</a>
</div>
<div class="messageContainer">
<?php echo $message; ?>
</div>
</form>
<script>
function forgotPassword() {
window.location.href = "forget.php";
}
function register() {
window.location.href = "register.php";
}
function cancel() {
window.location.href = "register.php";
}
</script>
</body>
</html