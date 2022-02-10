<?php session_start();
if (!isset($_SESSION['id'] ) || $_SESSION["IS_STUDENT"] !== true) {
    header("location:https://afsaccess4.njit.edu/~ra595/"); 
    exit();
   
   }
   else{
    session_destroy();

   }
?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <title>Student</title>
</head>
<body>
    <div class="grid">
        <div class="grid1">
        <h1>Welcome Student </h1>
             <p> Student Landing Page </p>
        </div>
          
    </div>
    
  
</body>
</html>
