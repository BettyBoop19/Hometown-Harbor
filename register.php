<?php
include_once('config.php');
$successMessage = "";
if (isset($_POST['registerButton'])) {
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $emailID = $_POST['emailID'];
    $password = $_POST['password'];
    $query = "INSERT INTO Registered_Data (FIRST_NAME, MIDDLE_NAME, LAST_NAME, USER_NAME, EMAIL_ID, PASSWORD) 
              VALUES ('$firstName', '$middleName', '$lastName', '$userName', '$emailID', '$password')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: login.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
<html>
<head>
<title>User Registration</title>
<style>
body {
display: flex;
align-items: center;
justify-content: center;
height: 100vh;
margin: 0;
font-family: Arial, Helvetica, sans-serif;
background-color: #fff;
color: #000;
}
form {
width: 40%;
max-width: 400px;
margin: auto;
border-radius: 10px;
padding: 20px;
box-shadow: 2px 2px 10px #333;
background: 135deg, #2193b0, #6dd5ed;
}
form input {
padding: 10px;
margin-bottom: 10px;
border: 1px solid #ccc;
border-radius: 5px;
}
.container {
display: flex;
flex-wrap: wrap;
gap: 10px;
}
.container label {
width: 30%;
text-align: right;
margin-right: 10px;
}
.container input {
width: 65%;
}
.buttons {
display: flex;
gap: 10px;
justify-content: space-between;
margin-top: 20px;
}
.buttons input {
width: 48%;
background-color: #000;
color: #fff;
border: none;
padding: 10px;
border-radius: 5px;
cursor: pointer;
}
.message {
text-align: center;
color: #fff;
margin-top: 20px;
}
</style>
</head>
<body>
<form method="post">
<h1 style="text-align: center;">Register</h1>
<div class="container">
<label for="firstName">First Name:</label>
<input type="text" id="firstName" name="firstName" placeholder="Enter your first name">
<label for="middleName">Middle Name:</label>
<input type="text" id="middleName" name="middleName" placeholder="Enter your middle name">
<label for="lastName">Last Name:</label>
<input type="text" id="lastName" name="lastName" placeholder="Enter your last name">
<label for="userName">User Name:</label>
<input type="text" id="userName" name="userName" placeholder="Enter your username">
<label for="emailID">Email ID:</label>
<input type="email" id="emailID" name="emailID" placeholder="Enter your email address">
<label for="password">Password:</label>
<input type="password" id="password" name="password" placeholder="Enter password">
<label for="retypePassword">Re-type Password:</label>
<input type="password" id="retypePassword" name="retypePassword" placeholder="Enter password again">
</div>
<div class="buttons">
<input type="submit" value="Register" onclick="validation(event);" name="registerButton">
<input type="button" value="Cancel">
</div>
<div class="message" id="messageContainer">
<?php echo $successMessage;?>
</div>
</form>
<script>
function validation(event) {

}
</script>
</body>
</html