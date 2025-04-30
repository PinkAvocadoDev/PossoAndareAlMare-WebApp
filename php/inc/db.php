<?php
try{
	$con = mysqli_connect("localhost","possoandarealmare","","my_possoandarealmare");
}catch (Exception $e){
	http_response_code(500);
	exit;
}