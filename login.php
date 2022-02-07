
<?php

function to_middle($data){
    $middle_curl = "
    http://afsaccessX.njit.edu/~cm39/two.php/";
    $username= $_POST['username'];
    $password= $_POST['password'];
    $x  = curl_init();
   curl_setopt($x,CURLOPT_URL,$middle_curl);
   curl_setopt($x,CURL_POST,strlen($data));
   curl_setopt($x,CURL_POSTFIELDS,$data);
   curl_setopt($x,CURLOPT_RETURNTRANSFER,true);

   $responseData = curl_exec($x);
   curl_close($x);


   return $responseData



}
$middle_response = to_middle(formData);


echo $middle_response;


?>