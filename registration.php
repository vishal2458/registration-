<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="s1.css">
</head>

<body>

<div id="block1">

    <div class="navbar">
   
    
        <a  href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
        <a href="#"><i class="fa fa-fw fa-search"></i> Search</a> 
        <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
        <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
        
    </div>
</div>

<div id="t1">
    <div>
    <form action="Displayy.php" method="post">

        <lable>First Name : <input type="text" name="Firstname" required><br><br>
            <lable>Last Name : <input type="text" name="Lastname" required><br><br>
                <lable>Email : <input type="email" name="Email" required><br><br>
                    <lable>DOB : <input type="date" name="DOB" required><br><br>
                        <label>Gender :<input type="radio" name='Gender' value="male">Male
                            <input type="radio" name="Gender" value="female">Female<br><br>
                            <lable>Password : <input type="password" name="Password" required><br><br>

                                <input type="submit" value="submit" name="submit" id="sb">





    </form>
    </div>
    </div>
</body>

</html>