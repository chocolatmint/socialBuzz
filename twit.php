<?php
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "162992258-2A0QqhZyiBmLr3jdtOHkA0WD05FefXCZK9DO5mfG",
    'oauth_access_token_secret' => "Z7UegYSXH4lpme1h71F9qVPildIIyjpb46hsCSnrOu7XG",
    'consumer_key' => "mnmOQqDxJQOc7ID8a2L2PnRKv",
    'consumer_secret' => "bqcvmToLbN8Ftxs0hekmrDNfE67YOQQYTTA2vJjaWSJy0QAEeR"
);
 
$url = 'https://api.twitter.com/1.1/users/show.json';
$requestMethod = 'GET';
//$getfield = '?screen_name=taylorswift13';
$getfield = '?user_id=17919972';
$twitter = new TwitterAPIExchange($settings);
$result = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
echo "$result\n";
$details = json_decode($result,true);
echo "followers:".$details['followers_count']; 
?>