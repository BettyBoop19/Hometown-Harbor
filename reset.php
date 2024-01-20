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
}
label {
display: block;
font-size: 16px;
margin-bottom: 8px;
}
input {
width: 100%;
padding: 10px;
margin-bottom: 16px;
font-size: 14px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}
input[type="submit"],
input[type="button"] {
background-color: #3498db;
color: #fff;
cursor: pointer;
font-size: 16px;
padding: 10px;
border: none;
border-radius: 4px;
}
.messageContainer {
height: 24px;
display: flex;
justify-content: center;
align-items: center;
color: #e74c3c;
}
.forgotPasswordTextContainer {
text-align: center;
margin-bottom: 16px;
font-size: 20px;
color: #333;
}
</style>
</head>
<body>
<form action="" method="post">
<div class="forgotPasswordTextContainer">
<h1>Forgot Password</h1>
</div>
<label for="emailID">Enter your email address:</label>
<input type="email" placeholder="example123@gmail.com" name="emailID" required>
<input type="submit" value="Reset" name="resetButton">
<input type="button" value="Cancel">
<div class="messageContainer">
</div>
</form>
</body>
</html>