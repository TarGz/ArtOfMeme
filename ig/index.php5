<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Art Of MeMe</title>
    <meta name="description" content="Bring beauty to MeMe :: We will mix the culture of internet meme and the culture of graphic design to create beautiful artwork ans posters">
    <meta name="author" content="targz">
   </head>

<?


$code = $_GET["code"];
if($code){

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
	
	var_dump($json);
	echo $json->{'access_token'}; 
	
	// API
	//http://instagram.com/developer/endpoints/tags/
	//http://instagram.com/developer/endpoints/likes/
	//http://fr2.php.net/manual/en/function.curl-exec.php
	
	
	
}




	
?>

<a href="https://api.instagram.com/oauth/authorize/?client_id=8b13b2e6e114486388c1e86a69835ad8&redirect_uri=http://www.artofmeme.com/ig/&response_type=code">LOG IG2</a>
  </body>
</html>





