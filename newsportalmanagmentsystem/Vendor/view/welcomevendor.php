<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || Vendor</title>
    <link rel="stylesheet" href="/Project/Vendor/css/welcomevendorstyle.css">
    <style type="text/css">
    table
{
    border-collapse: collapse;
    width: 100%;
    color:;
    font-size: 24px;
    text-align:center;
}
th
{
    background-color:#d96459;
    color:white;
}
tr:nth-child(even){background-color: #f2f2f2;}
.btn
{
    padding-left:10px;
    padding-right:10px;
    background-color:#d96459;
    color:white;
    border-style: solid;
}
a
{
    text-decoration: none;
    color:blue;
    font-weight: bold;
    font-size: 20px;
    padding-left:1000px;
}
    </style>
</head>
<body>
<div class="heading">
    <h1 class="headText">Welcome!</h1>
</div>  
<h2>District-wise Sales:</h2>

<!-- Chart Code -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['District', 'Sale'],
          ['Dhaka',     8],
          ['Rangpur',    4],
          ['Rajsahi',    5],
          ['Khulna',     4],
          ['Sylhet',     3]
        ]);

        var options = {
          title: 'Sales Per Districts:'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <div id="piechart" style="width: 900px; height: 500px;"></div>  
    
    <!-- Chart-End -->

    <h2>Customer Emails:</h2>
    <table> 
        <tr>
            <th>Email</th>
            
        </tr>
        
        <?php
        $conn=mysqli_connect("localhost","root","","newspaper");
        if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_error());
    }
    $sql="SELECT email from vendor_email";
    $result=$conn->query($sql);
    if($result-> num_rows>0)
    {
        while($row=$result-> fetch_assoc())
        {
            echo "<tr><td>". $row["email"];?><tr><td><input type="button" value="Send" class="btn" onlclick=""></td></tr><?php "</td></tr>";
            
        }
        echo "</table>";
    }
    else
    {
        echo "0 result";
    }
    $conn->close();
    ?>
 

    </table>

<br><br>
<a href="/Project/index.php">Log Out</a>


</body>
</html>