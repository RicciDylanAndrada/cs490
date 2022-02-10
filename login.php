<?php session_start();
   ob_start();

   
 $username = $_POST["username"];
   $password = $_POST["password"];
  



if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
	$pass = $_POST['password'];
	
	$middle_curl = "https://afsaccess4.njit.edu/~cm39/two.php";
  
$fields = array('username' => urlencode($_POST['username']),'password' => urlencode($_POST['password']));


   $ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $middle_curl);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);


$res = json_decode($result,true);
		if($res){
      echo $result;
	  $_SESSION['id'] = $res['status'];
	  $_SESSION['username'] = $_POST['username'];
	  $_SESSION["loggedin"] = true;

			if($res['status']==0){
				$_SESSION["IS_STUDENT"]=true;


				
				
				header("Location: https://afsaccess4.njit.edu/~ra595/student.php");

        

			} elseif($res['status']==1){
				$_SESSION["IS_ADMIN"]=true;
        		

        header("Location: https://afsaccess4.njit.edu/~ra595/teacher.php");
			
      }
	  elseif($res['status']==-1){

		$_SESSION['error'] = 'Error: Invalid Credentials';
		header("Location:https://afsaccess4.njit.edu/~ra595");
		
			
      }
	  
			else{
				
				header("Location: https://afsaccess4.njit.edu/~ra595");
			}
    

      
		}
		else{
			
			header("Location: https://afsaccess4.njit.edu/~ra595");

		}
	
}


//echo json_encode($middle_response);

  
ob_end_flush();

?>
