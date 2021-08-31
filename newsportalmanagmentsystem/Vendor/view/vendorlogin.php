<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In/Vendor</title>
    <link rel="stylesheet" href="/Project/Vendor/css/vendorloginstyle.css">
</head>
<body>
<div style="text-align:center" class="form-conteinar">
    <form action="/Project/Vendor/control/vendorloginaction.php" method="POST" class="form">
        <h1>Log In</h1>
        <table>
            <tr>
                <td><label for="email" class="input-text">Email:</label> </td>
                <td> <input type="email" name="email" id="email" class="input" required></td>
                <span id="err-pass" ></span></td>
            </tr>
            <tr>
                <td><label for="password" class="input-text">Password:</label></td>
                <td><input type="password" name="password" id="password" class="input" required></td>
                <span id="err-pass" ></span></td>
            </tr>
        </table>
        <div class="button"><button type="submit" class="btn">Log In</button></div>
       <div class="button"><button type="reset" class="btn">Reset</button></div> 
        <div class="text"> Don't Have an Account?<a href="register.php"> Register</a></div>
    </form>
</div>    
</body>
</html>