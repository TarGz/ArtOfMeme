<?php
if(!$access_token) $access_token = $_COOKIE["ig"];

$tag = array(0 => "cloud", 1 => "sky");
echo '<ul class="media-grid">';
for ($i = 0; $i <= 1; $i++) {
	$ch = curl_init();
	$url = 'https://api.instagram.com/v1/tags/'.$tag[$i].'/media/recent?access_token='.$access_token;
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_FRESH_CONNECT,'1');
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,'1');
	$result = curl_exec($ch);
	curl_close($ch);
	$json = json_decode($result);
	$data = $json->{'data'};
	$array_length = count($data);
	$rand = rand(0, $array_length-1);
	$dat = $data[$rand];
	$id =  $dat->{'id'};
	$likes =  $dat->{'likes'}->{'count'};
	$img = $dat->{'images'}->{'standard_resolution'}->{'url'};
	$url = 'https://api.instagram.com/v1/media/'.$id.'/likes';			
	echo '<li><a href=javascript:like("'.$id.'","'.$access_token.'")><img width="260" height="260" src="'.$img.'" / > <span class="likes-hide">likes :: '.$likes.'</span></a></li>';
				
}				
echo '</ul>';
?>

