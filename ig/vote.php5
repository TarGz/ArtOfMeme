<?php

if(!$access_token){
	$access_token = $_GET["t"];
}


				// Load tags
				$ch = curl_init();
				$url = 'https://api.instagram.com/v1/tags/tiltshift/media/recent?access_token='.$access_token;
				curl_setopt($ch,CURLOPT_URL,$url);
				curl_setopt($ch,CURLOPT_FRESH_CONNECT,'1');
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,'1');

				$result = curl_exec($ch);
				curl_close($ch);
	
				$json = json_decode($result);
				//var_dump($json);
				$data = $json->{'data'};
				$array_length = count($data);
				
				echo '<ul class="media-grid">';
				
				for ($i = 1; $i <= 2; $i++) {
					
					$rand = rand(0, $array_length-1);
					
		    		//echo  $rand."<br/>";
					
					$dat = $data[$rand];
					$id =  $dat->{'id'};
					$likes =  $dat->{'likes'}->{'count'};
					$img = $dat->{'images'}->{'standard_resolution'}->{'url'};
					$url = 'https://api.instagram.com/v1/media/'.$id.'/likes';
					
					
					
					echo '<li><a href=javascript:like("'.$id.'","'.$access_token.'")><img width="200" height="200" src="'.$img.'" / > <span class="likes-hide">likes :: '.$likes.'</span></a></li>';
					
				}
				
				echo '</ul>';
?>

