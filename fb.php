<?php
						//10207431316249499
						$fb_page = 'TaylorSwift/';
						$fields  =  '?fields=fan_count&';
						$access_token = '1130511983664860|yG2_cF1PL3l012qB0WAcHKKe2AQ';
						$url = "https://graph.facebook.com/v2.2/".$fb_page.$fields.'&access_token='.$access_token;
						$curl = curl_init($url);
						curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);   
						curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
						$result = curl_exec($curl);  
						curl_close($curl);
						//echo $result.'<br>';
						$details = json_decode($result,true);
						//echo "Likes:".$details['fan_count']; 
						
		           		$likes=$details['fan_count'];  
                  		if($likes<1000)
						{
							echo $likes;
						}
						else if($likes>=1000 && $likes<1000000)
						{
							$likes=$likes/1000;
							echo intval($likes)."K";
						}
						else if($likes>=1000000)
						{
							$likes=$likes/1000000;
							echo intval($likes)."M";
						}
						
?>