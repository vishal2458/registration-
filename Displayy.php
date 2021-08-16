<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY</title>
    <link rel="stylesheet" href="s1.css">

    <style>

      






    </style>
</head>

<body>
<div id="block1">

<div class="navbar">


    <a  href="registration.php"><i class="fa fa-fw fa-home"></i> Home</a> 
    <a href="#"><i class="fa fa-fw fa-search"></i> Search</a> 
    <a href="../assigment-1/index.php"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
    <a href="http://localhost/phpmyadmin/sql.php?db=cllg&table=class&pos=0" target="_blank"><i class="fa fa-fw fa-user"></i> DATABASE</a>
    
</div>
</div>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "2458";
    $dbname = "cllg";

    $conn = new mysqli($servername, $username, $password, $dbname);


    // ESTABLISING CONNECTION 
    if ($conn->connect_error) {
        die("FAILED TO CONNECT WITH DATA BASE");
    } else
      echo  "<script>alert ('CONNECTED TO DATABASE $dbname')</script>";
    

    //TAKING INPUT FROM USER
    
    $Firstname = $_REQUEST['Firstname'];
    $Lastname = $_REQUEST['Lastname'];
    $Email = $_REQUEST['Email'];
    $DOB = $_REQUEST['DOB'];
    $Gender = $_REQUEST['Gender'];
    $Password = $_REQUEST['Password'];


    // storing data in table

    $sql = "INSERT INTO class VALUES('$Firstname','$Lastname','$Email','$DOB','$Gender','$Password')";


    if ($conn->query($sql) === TRUE) {
        echo "<p>Your data is sucessfully stored in database</p>";
    } else {

        echo "<p>There is some problem in storing your data " . $conn->error ."</p>";
    }

    echo "<p id='p11'>LATEST VALUE STORED IN DATA BASE IS</p>";

    echo "<table>
    
    <th>FirstName</th>
    <th>LastName</th>
    <th>Email</th>
    <th>DOB</th>
    <th>Password</th>

   <tr> <td> $Firstname </td>
<td> $Lastname </td>
   <td> $Email </td>

    <td> $DOB </td>
<td> $Password </td>
    
    <tr>
    
    </table>"

?>

<div >

<button style="color:white"><a href="http://localhost/phpmyadmin/sql.php?db=cllg&table=class&pos=0" target="_blank">Check database</button>

</div>






</body>

</html>