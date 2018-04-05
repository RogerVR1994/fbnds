<?php

	$access_token = "EAACEdEose0cBAC41ASXLk0YMIQZAXzkNXb6KxCBtjXM537sFZAn2a39rcI1BsfpJN4g6ry7NTk4FHlFlwgG4vZBC0Sp3pLVmNsitLJdVLm7id8jWO6KAQTnRaEma7Yt5WFkjt0fq6Lh8QN4wEyXKNo4VrYJ9LJRZAuMwzbasTk7YZCQMRtkfDh0YP3XLGcZAQZD";

	$url = "https://graph.facebook.com/v2.12";
	$user_id = "10210952140812158";


	$data = file_get_contents("https://graph.facebook.com/v2.12/10210952140812158?fields=name,id,birthday,gender&access_token=".$access_token);
	$json = json_decode($data);

	$name = $json->name;
	$id = $json->id;
	$bday = $json->birthday;
	$gender = $json->gender;

	$year = explode("/",$bday);

	 
?>