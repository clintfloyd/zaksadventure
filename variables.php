<?php
if($_SERVER['SERVER_ADDR'] == '127.0.0.1'){

	$CURRENTLY_IN = "Dubai";
	$WEIGHT = "12";
	$HEIGHT = "90";
	$COUNTRIES_VISITED = "9";

}else{

	$CURRENTLY_IN = getenv('CURRENTLY_IN');
	$WEIGHT = getenv('WEIGHT');
	$HEIGHT = getenv('HEIGHT');
	$COUNTRIES_VISITED = getenv('COUNTRIES_VISITED');

}

function getBday(){
	$birthDate = "09/05/2016";
	//explode the date to get month, day and year
	$birthDate = explode("/", $birthDate);
	//get age from date or birthdate
	$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
	? ((date("Y") - $birthDate[2]) - 1)
	: (date("Y") - $birthDate[2]));
	return $age;
}

function yearsLabel(){
	$x = getBday();
	if($x <= 1){
		return "year";
	}else{
		return "years";
	}
}

$weather = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Dubai&appid=39b2cbdd27e4f978ecc9d392617720e3");

$json_weather = (array) json_decode($weather);

$temperature = $json_weather["main"]->temp;

$temp_in_c = $temperature - 273.15;

?>