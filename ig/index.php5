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
	$access_token = $json->{'access_token'};
	setcookie("ig", $access_token, time()+3600);
}else{
	if($_COOKIE["ig"] && $_COOKIE["ig"] != "logout") $access_token = $_COOKIE["ig"];
}

if($_GET["logout"] == 1){
	setcookie("ig", 'logout', time()+3600);
	$access_token = null;			
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>#pictmatch</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
	<script src="js/ig.js"></script>
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }

    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>
    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">#instamatch</a>
		<?php 
		if( $access_token ){
			echo '<p class="pull-right"><a href="?logout=1">Logout</a></p>';
		}else{
			echo '<p class="pull-right"><a href="https://api.instagram.com/oauth/authorize/?client_id=8b13b2e6e114486388c1e86a69835ad8&redirect_uri=http://www.artofmeme.com/ig/&response_type=code&scope=likes">Login with instagram	</a></p>';
		}
		  ?>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Instagram Picture match</h1>
		  <iframe src="http://followgram.me/targz/widget" style="height:27px;" frameborder="0"></iframe>
        </div>
        <div class="row">
          <div class="span10">
            <h2>Wich picture do you like the best ?</h2>
			
			
			<div id="votecontainer">
				<div id="loadcontainer">
			<?
			echo "t=".$access_token;
			if( $access_token  ){
				include('vote.php5');
			}else{
				include('intro.php5');
			}
			?>
			<script>
			
			
			
			function like(id,token){
				metoken = token;
				console.log("id"+id);
				console.log("token"+token);
				//$('#msg-container').load('like.php?id='+id);
				

				var request = $.ajax({
				  url: "like.php5",
				  type: "GET",
				  data: {
					  	id : id,
					  	t : token
					},
				  dataType: "html"
				});

				request.done(function(msg) {
					console.log("done");
				 	//console.log(msg);
					displayResult();
				});
			}
			function displayResult(){
				console.log($('.nextbtn') );
				$('.likes-hide').removeClass("likes-hide");
				$('.nextbtn').removeClass("nextbtn");				

				
				
			}
			
			function next(){
				console.log("next !"+metoken);
				console.log($("#loadcontainer"));
				//$("#loadcontainer").remove();
				$('.nextbtn').css(".nextbtn");
				$('#loadcontainer').load('vote.php5');
			}
			</script>
			
			
			</div></div>
			
			<a target="_blank" href="javascript:next();" class="btn primary nextbtn">Next vote »</a>
          </div>
          <div class="span4">
            <h3>How to participate ?</h3>
          </div>
        </div>
      </div>
	  

      <footer>
        <p>&copy; ArtOfMeme 2012</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
