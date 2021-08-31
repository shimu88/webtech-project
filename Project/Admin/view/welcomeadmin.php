<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || admin</title>
    <style>
      table tr td{
        border: 1px black solid;
      }
      </style>
</head>
<body>

<div class="header">
 <p style="text-align:center;">
        <br>
        <img src="\Project\Admin\file\news.png" alt="news" width="150" height="120" class="center"> 
    <h1 style="text-align:center;">
    News portal 
  </h1>
    </p>
    </div>
    <marquee direction="right"bgcolor="silver"><a href="">Welcome News portal Managment System</marquee>

    <div class="column">
    <div class="card">
      <img src="\Project\Admin\file\shimu.jpg" alt="shimu" width="150" height="120" >
      <div class="container">
        <h2>shimu</h2>
        <p class="title">engineer</p>
        <p>16-32012-2@student.aiub.edu</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
    
     <table>
      <tr>
        <td><a href="https://www.bbc.com"><img src="\Project\Admin\file\newspaper.jpg"  width="350" height="200"></a></td>
        <td><a href="https://www.bbc.com/bengali"><img src="\Project\Admin\file\BBC bangla.png"  width="350" height="200"></a></td>
        <td><a href="https://www.thedailystar.net/"><img src="\Project\Admin\file\daily star.png"  width="350" height="200"></a></td>
        <td><a href="https://www.dhakatribune.com/mobile"><img src="\Project\Admin\file\dhaka tribune.png"  width="350" height="200"></a></td>
        <td><a href="https://www.prothomalo.com/"><img src="\Project\Admin\file\prothom alo.png"  width="350" height="200"></a></td>
      <tr>
      <tr><td><h2>Click on the Image to see the news</h2></td></tr>     
  </table>

     <title>Live Search</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     
    </head>
   <body>
   
   <div class="jumbotron text-center">
     <h1>Information Search</h1>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-sm-3">
       </div>
       <div class="col-sm-6">
         <input type="text" class="form-control" id="search">
         <table class="table table-hover">
         <thead>
           <tr>
             <th>fname</th>
             <th>lname</th>
             <th>email</th>
             <th>gender</th>
             <th>phone</th>
             <th>passsword</th>
           </tr>
         </thead>
         <tbody id="output">
           
         </tbody>
       </table>
       </div>
       <div class="col-sm-3">
       </div>
     </div>
   </div>
   <script type="text/javascript">
     $(document).ready(function(){
       $("#search").keypress(function(){
         $.ajax({
           type:'POST',
           url:'/Project/Admin/Control/search.php',
           data:{
             name:$("#search").val(),
           },
           success:function(data){
             $("#output").html(data);
           }
         });
       });
     });
   </script>
  
  <h1>delete</h1>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-sm-3">
       </div>
       <div class="col-sm-6">
         <input type="text" class="form-control" id="delete">
         <table class="table table-hover">
         <thead>
           <tr>
             <th>fname</th>
             <th>lname</th>
             <th>email</th>
             <th>gender</th>
             <th>phone</th>
             <th>passsword</th>
           </tr>
         </thead>
         <tbody id="output">
           
         </tbody>
       </table>
       </div>
       <div class="col-sm-3">
       </div>
     </div>
   </div>
   <script type="text/javascript">
     $(document).ready(function(){
       $("#delete").keypress(function(){
         $.ajax({
           type:'POST',
           url:'/Project/Admin/Control/delete.php',
           data:{
             name:$("#delete").val(),
           },
           success:function(data){
             $("#output").html(data);
           }
         });
       });
     });
   </script>
 
 <h1>update</h1>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-sm-3">
       </div>
       <div class="col-sm-6">
         <input type="text" class="form-control" id="update">
         <table class="table table-hover">
         <thead>
           <tr>
             
             <th>lname</th>
             
           </tr>
         </thead>
         <tbody id="output">
           
         </tbody>
       </table>
       </div>
       <div class="col-sm-3">
       </div>
     </div>
   </div>
   <script type="text/javascript">
     $(document).ready(function(){
       $("#update").keypress(function(){
         $.ajax({
           type:'POST',
           url:'/Project/Admin/Control/update.php',
           data:{
             name:$("#update").val(),
           },
           success:function(data){
             $("#output").html(data);
           }
         });
       });
     });
   </script>



   <div><a href ="/Project/Admin/session/signoutprocess.php">SignOut</a></div>
 
   
</body>
</html>