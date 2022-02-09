<?php session_start();
   ob_start();

   
 $username = $_POST["username"];
   $password = $_POST["password"];
  
//      $middle_curl = "https://afsaccess4.njit.edu/~ra595/middleTest.php/";

   
//    $fields = array ('username' =>urlencode($post['username']),
//    'password' => urlencode($post['password']));   

//    foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
//    rtrim($fields_string, '&');

//    $ch = curl_init();
// curl_setopt($ch,CURLOPT_URL, $middle_curl);
// curl_setopt($ch,CURLOPT_POST, count($fields));
// curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $result = curl_exec($ch);




//curl_close($ch);



if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
	$pass = $_POST['password'];
	$middle_curl = "https://afsaccess4.njit.edu/~pmp94/cs490/login.php";

//   $fields = array(
//     'username' => $_POST['username'],
//     'password' => $_POST['password']
// ); 

//foreach ( $fields as $key => $value) {
  //$post_items[] = $key . '=' . urlencode($value);
//}
//    $fields = array ('username' =>urlencode($post['username']),
//    'password' => urlencode($post['password']));   
$fields = array('username' => urlencode($_POST['username']),'password' => urlencode($_POST['password']));


   $ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $middle_curl);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);

//$res = json_encode($result,true);//testing

$res = json_decode($result,true);
		if($res){
      echo $result;
			
			if($res['status']==0){

				
				$_SESSION['id'] = $res[0];
				$_SESSION['username'] = $_POST['username'];
			
        

			} elseif($res['status']==1){
        $_SESSION['id'] = 1;
				$_SESSION['username'] = $_POST['username'];

        //header("Location: https://afsaccess4.njit.edu/~ra595/teacher.php");
			
      }
	  elseif($res['status']==-1){
        $_SESSION['id'] = 1;
				$_SESSION['username'] = $_POST['username'];

		echo '<script>alert("you have entered an invalid email address or password. please try again ")</script>'; 

			
      }
	  
			else{
				
				echo '<script>alert("you have entered an invalid email address or password. please try again ")</script>'; 
			}
    

      
		}
		else{
			
				echo '<script>alert("you have entered an invalid email address or password. please try again ")</script>'; 

		}
	
}


//echo json_encode($middle_response);

  
ob_end_flush();

?>
