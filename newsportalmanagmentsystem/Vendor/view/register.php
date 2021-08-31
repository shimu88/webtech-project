<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
   
    <link rel="stylesheet" href="/Project/Vendor/css/registerstyle.css">
</head>
<body>
<div class="form-container">
    <form action="/Project/Vendor/model/database.php" method="POST" class="form" onsubmit="return validateForm()" enctype="multipart/form-data">
        <h1>Sign Up</h1>
        <table> <tr>
            <td><label for="fname" class="text">First Name:</label></td>
        <td><input type="text" name="fname" id="fname" class="input" required ></td>
        <span id="err-fname" >*</span></td>
    </tr>
        <tr>
            <td><label for="lname" class="text">Last Name:</label></td>
        <td><input type="text" name="lname" id="lname" class="input" required></td>
        <span id="err-lname" >*</span></td>
    </tr>
        <tr>
            <td><label for="email" class="text">Email:</label></td>
       <td> <input type="email" name="email" id="email" class="input" required></td>
       <span id="err-email" >*</span></td>
    </tr>
     <tr> 
        <td><label for="" class="text"> Gender:</label></td>
        <td><input type="radio" name="gender" id="gender" value="Male">Male
        <input type="radio" name="gender" id="gender" value="Female" >Female</td>
        <span id="err-gender" >*</span>
    </tr>
    <tr>
    <td>
   <label for="" class="text">Phone no:</label>
   </td>
   <td>
    <input type="phone" name="phone" id="phone" class="input" required>
     </td>
     <span id="err-phone" >*</span>
    </tr>


        <tr> <td><label for="password" class="text">Password:</label></td> 
          <td><input type="password" name="password" id="password" class="input" ></td>
          <span id="err-pass" >*</span></td>
        </tr>
        </table>


        <div class="button"> <button type="submit" class="btn">Create Account</button></div>  
        <div class="button"><button type="reset"class="btn">Reset</button></div>
        <script src="js/validation.js"></script>            
    </form>
</div>
</body>
</html>