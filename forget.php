<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password</title>
<style>
body {
font-family: Arial, sans-serif;
display: flex;
align-items: center;
justify-content: center;
height: 100vh;
margin: 0;
background-color: #f0f0f0;
}
form {
background-color: #fff;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
padding: 20px;
width: 300px;
text-align: center;
}
label {
display: block;
margin: 10px 0;
}
input {
width: 100%;
padding: 8px;
margin-bottom: 15px;
box-sizing: border-box;
}
input[type="submit"],
input[type="button"] {
background-color: #007BFF;
color: #fff;
border: none;
padding: 10px;
border-radius: 4px;
cursor: pointer;
}
input[type="submit"]:hover,
input[type="button"]:hover {
background-color: #0056b3;
}
.messageContainer {
color: #dc3545;
margin-top: 10px;
}
</style>
</head>
<body>
<form action="" method="post">
<h2>Forgot Password</h2>
<label for="emailID">Enter your email address:</label>
<input type="email" id="emailID" name="emailID" placeholder="example123@gmail.com" required>
<div class="messageContainer">
<!-- PHP code to display error message goes here -->
</div>
<input type="submit" value="Reset Password" name="resetButton">
<input type="button" value="Cancel">
</form>
</body>
</html