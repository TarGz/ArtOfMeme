<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Art Of MeMe</title>
    <meta name="description" content="Bring beauty to MeMe :: We will mix the culture of internet meme and the culture of graphic design to create beautiful artwork ans posters">
    <meta name="author" content="targz">
   </head>
<body>
	

	
	
	


<?php
$code = $_GET["code"];
$tag = 'tiltshift';
if($code){
	
	
	// Settings
	
	
	// oAUTH
	$url = 'https://api.instagram.com/oauth/access_token';
	$fields = array(
	            'client_id'=>'8b13b2e6e114486388c1e86a69835ad8',
	            'client_secret'=>'25bdb363a14a4ed7b60e4f2fd4d6c53d',
	            'grant_type'=>'authorization_code',
	            'redirect_uri'=>'http://www.artofmeme.com/ig/',
	            'code'=>$code
	        );
	//open connection
	$ch = curl_init();
	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_FRESH_CONNECT,'1');
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,'1');
	curl_setopt($ch,CURLOPT_POST,count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS,$fields);
	
	//execute post
	$result = curl_exec($ch);

	//close connection
	curl_close($ch);
	
	$json = json_decode($result);
	$access_token = $json->{'access_token'};
	echo $access_token; 
	
	// API
	//http://instagram.com/developer/endpoints/tags/
	//http://instagram.com/developer/endpoints/likes/
	//http://fr2.php.net/manual/en/function.curl-exec.php
	
	
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
	
	echo "------";
	$data = $json->{'data'};
	//var_dump($data[0]);
	//echo "------". $data[0]->{'id'};
	//echo "------". $data[0]->{'images'}->{'thumbnail'}->{'url'};


	
	foreach ($data as $dat) {
		$id = $dat->{'id'};
		$img= $dat->{'images'}->{'thumbnail'}->{'url'};
		// Like it
		$ch = curl_init();
		$fields = array(
	            'access_token'=>$access_token
	        );

		$url = 'https://api.instagram.com/v1/media/'.$id.'/likes';
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_FRESH_CONNECT,'1');
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,'1');
		curl_setopt($ch,CURLOPT_POST,count($fields));
		curl_setopt($ch,CURLOPT_POSTFIELDS,$fields);


		$result = curl_exec($ch);
		curl_close($ch);
		
		var_dump($result);
		
		
		echo '<p><img src="'.$img.'" / >'.$url.'</p>';
	}
	
}

?>


<a href="https://api.instagram.com/oauth/authorize/?client_id=8b13b2e6e114486388c1e86a69835ad8&redirect_uri=http://www.artofmeme.com/ig/&response_type=code&scope=likes">LOG <?=$tag?></a>
  </body>
</html>





