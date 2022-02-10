<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">

<title>CS490</title>
</head>
<body>
    
    
    
    



    
    
    
    <div class="grid ">

        <div class="loginBox">
                <form action="login.php" method="post" id='login_form' class="loginForm" name="login_form">
                    <h1>Login</h1>

                    <div class="inputFields">
                        <div class="input-field">
                            <input type="text"  name="username" id="username" class="field" placeholder="username" required/>
                        </div>
                        
                            <div class="input-field">
                                <input type="password" name="password" id="password"  class="field1" placeholder="password" required/>
                            </div>      
                              
                            </div>
                    
                    <button  type="submit" name="submit-btn"  class="sign-button">Sign In</button>
                    
                    </form>


                                     
            </div>
            
      <h1>

<?php if (isset($_SESSION['error'])) {
  echo $_SESSION['error'];
  unset($_SESSION['error']);
} ?>
</h1>
        </div>
    </div>
    
    


 })


    </script> -->
</body>
</html>
