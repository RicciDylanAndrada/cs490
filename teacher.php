<?php session_start();
if (!isset($_SESSION['id'] ) || $_SESSION["IS_ADMIN"] !== true) {
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
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="styles.css">    
    <title>Teacher</title>
</head>
<body>
<div class="grid">
        <div class="grid1">
        <h1>Welcome Teacher </h1>
             <p> Teacher Landing Page </p>
        </div>
          
    </div>
  
</body>
</html>
