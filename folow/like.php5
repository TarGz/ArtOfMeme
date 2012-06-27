<?

$id = $_GET["id"];
$access_token = $_GET["t"];
// Like it
$ch = curl_init();
echo "<root>";
echo "<t>".$access_token."</t>";
echo "<t>".$id."</t>";
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
echo "<r>";
//var_dump($result);
echo "</r>";
echo "</root>";
?>