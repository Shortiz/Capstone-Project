<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
$usernameErr = $passwordErr = "";
$username = $password= "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["username"])){
        $usernameErr = "* UserName is required";
    } else{
        $username = test_input($_POST["username"]);
    }
    if(empty($_POST["password"])){
        $passwordErr = "* Password is required";
    } else{
        $password = test_input($_POST["password"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
                <form action="Login.php"  onsubmit="return validatetheForm()" method="post" enctype="multipart/form-data" name="Login" id="Login">
                  <label for="username" id="usernameLabel">User Name:</label>
                  <span class="error"><?php echo $usernameErr;?></span><br>
                      <input type="text" name="username" id="username" placeholder="User Name" ><br>
                  <label for="password" id="passwordLabel">Password: </label>
                  <span class="error"><?php echo $passwordErr;?></span><br>
                      <input type="password" name="password" id="password" placeholder="Password"><br>
                      <input type="submit" value="submit" id="submit">
                      <button onclick="location.href='signUp.html'" type="button">Sign Up</button>
                      </form>
</body>
</html>