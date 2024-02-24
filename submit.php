
if(isset($_POST['submit'])) 
{ 
	$to= "masternasser2@gmail.com"; 
	$subject= "Portfolio Mail"; 
	$msg= $_POST[comments"]; //textarea value will be send as message here. 
	$header= "Portfolio Mail" //For example: From: abc@xyz.com 
	mail($to,$subject,$msg,$header); 
} 