<?php session_start();
if (!isset($_SESSION['username'] )) {
 header("location:index.php"); 
    exit();
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">    
    <title>Teacher</title>
</head>
<body>
    <div class="grid ">
        <h1>Teacher Login</h1>

       
            

        </div>
    </div>
    
  
</body>
</html>
