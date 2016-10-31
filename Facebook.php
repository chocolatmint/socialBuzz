<?php
//10207431316249499
$fb_page = '19614945368/';
$fields  =  '?fields=fan_count&';
$access_token = '1130511983664860|yG2_cF1PL3l012qB0WAcHKKe2AQ';
$url = "https://graph.facebook.com/v2.2/".$fb_page.$fields.'&access_token='.$access_token;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);   
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);  
curl_close($curl);
$details = json_decode($result,true);
$follower=$details['fan_count'];
if ($follower<1000){
	$follower=$follower;
}
else if($follower>=1000&&$follower<1000000){
	$follower=floor($follower/1000);
	$follower=$follower."K";
}
else if ($follower>=1000000){
	 $follower=floor($follower/1000000);
	 $follower=$follower."M";
}
echo "Likes: $follower";
?>
