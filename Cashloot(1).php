<html><head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Akd Hacking </title>
<meta name="viewport" content="width=device-width"> <style>
body{ background:white;
border-style:solid;
border-radius:20px;
border-width:7px; font-family:'Acme',sans-serif;text-align:center;padding:10px;}


	h2{ 	
		font-weight: bold; 
				} 		
marquee{
	animation: akdhacker; 	
	animation-duration: 10s; 			display: inline-block; 			 
	animation-iteration-count: infinite; 		
	color:#002D3F;
}	
	
	.header{
	animation: akdhacker; 	
	animation-duration: 10s; 			display: inline-block; 			 
	animation-iteration-count: infinite; 		
padding: 10px 5px; 			
 border: black 3px solid; 			 
 border-radius: 10px; 			 
 margin-top: 20px; 		
 width:299px; 		} 	
	 
	 
	 	input{ 
		padding: 13px 50px; 		
		border: solid blue 2px; 			 			
		color: blue; 		
		font-weight: bold; 			
		font-size: 15px; 
		border-radius:29px;	
		} 		
		
		
	@keyframes akdhacker{ 					
		background-color:gold; 	
		}
img{
	border-style:solid;
border-width:7px;
border-radius:36px; 
width:70px;
}
h3{ 	padding: 0% }1
			
 a{ color : white; text-decoration: none; font-weight: bold; }
			
 #telegram { background-color : white; padding: 10px 1px; border-radius: 40px; } 
			
	#subscribe { background-color : black; padding: 10px 1px; border-radius: 80px; } p{ font-weight: bold ; }
			
 button{ 
 	padding: 10px 20px; 
 	font-size: 30px; 
 	border-style:solid;
 	border-radius:68px;
 	border-radius: 5px;
 	color: white; 	
 	font-weight: bold; 
 	background: #07428A; }
</style>
  </head><center>
     <u>Akd Hacking</u><br><br><hr>Cash loot<hr><br><br>



<?php

if(!isset($_POST['submit'])){
echo'

<form action="" method="POST"/>


<input type="text" name="refcode" placeholder="ENTER YOUR REFER CODE">
<br><br>
<input type="submit" name="submit" value="SUBMIT"/>

</form>
  ';
}


if(isset($_POST['submit'])){

$refcode=$_POST['refcode'];

  function RandomNumber($length)
{
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
$n = array('charan','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','preetham','suman','sunitha','tanu','manu','mahesh','mahendra','manoj','vikas','abhinav','arya','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','ananth','sumana','saritha','yogesh','razz');
$fname = $n[mt_rand(0,count($n))];	


$imei=RandomNumber(5);
$pwd=RandomNumber(8);
$user=RandomNumber(10);
$t=RandomNumber(12);
$name = '$fname'.$imei.'';
$email =''.$fname.''.$imei.'@gmail.com';

$dev = 'F'.$pwd.'CEC8AE2D7AC'.$t.'';

$host='dailyloot.technicalaab.com';

$url5='http://dailyloot.technicalaab.com/api/v1/signup';
 
$data5='{"name":"'.$name.'","email":"'.$email.'","phone":"'.$user.'","refferal_id":"'.$refcode.'","password":"'.$pwd.'","token":"'.$dev.'"}';

$headers5=['Content-length: '.strlen($data5).'','Content-Type: application/json','Host: '
.$host.'','Connection: Keep-Alive','User-Agent:rewardfsJGSA'];



 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url5);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data5);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_HTTPHEADER,$headers5);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  $send = $json['message'];
  
  
  curl_close ($ch);
  
if(isset($_POST['refcode'])){
	

echo"<div class='success'><center>
<font size='4'><hr><hr><br> $send<hr><hr>";
echo "<<meta http-equiv=refresh content=100; >";
#######Auto Refresh####
 } 
  
}



?>