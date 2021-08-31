<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <form action="/Project/Vendor/control/sendmailaction.php" method="POST"> 
   <h1>We would love to hear from you</h1>
    <strong>Name:</strong><br><br>
    <input type="text" name="name" id="name" required >
     
    <br><br><strong>Email:</strong><br><br>
    <input type="email" name="email" id="email" required>
     
    <br><br><strong>Message:</strong><br><br>
    <textarea name="comment" id="comment" cols="45" rows="5" required></textarea>

  <br><br><input type="submit" value="Submit">
  </form>

</body>
</html>