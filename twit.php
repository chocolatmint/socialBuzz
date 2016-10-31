<?php
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "Y9suzaK9NNr0UnPtrfOoNH8wuCafNlv",
    'oauth_access_token_secret' => "C7hqRstTe3ZED6bCawhkXHXGDA75eUg9Kg7gTa5dnK6sK",
    'consumer_key' => "ECoBgGriuOKo3EzQi6Jt3HRS6",
    'consumer_secret' => "to2p0M3RTZ4XMGiwnUmst1ZXXjOQXpVaQFoJDbBY70KvhJPU5M"
);
 
$url = 'https://api.twitter.com/1.1/followers/ids.json';
//url = 'https://api.twitter.com/1.1/users/show.json';
$requestMethod = 'GET';
//$getfield = '?screen_name=taylorswift13';
$getfield = '?user_id=17919972';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
?>