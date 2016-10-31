<?php
session_start();
//require_once("twitteroauth.php"); //Path to twitteroauth library
require_once("twitteroauth/TwitterOAuth/TwitterOAuth.php");
$twitteruser = "17919972";
$notweets = 30;
$consumerkey = "ViTIYnVPOPPUDFZtv1VtDyTBx";
$consumersecret = "RJsnzqgGukzBK01JKHAaCa3iPeb2L4iYmyOi97sJZuraV14lUD";
$accesstoken = "Y9suzaK9NNr0UnPtrfOoNH8wuCafNlv";
$accesstokensecret = "C7hqRstTe3ZED6bCawhkXHXGDA75eUg9Kg7gTa5dnK6sK";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?user_id=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>