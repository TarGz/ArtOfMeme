<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Art Of MeMe</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le javascript -->
    <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script>$(function () { prettyPrint() })</script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-alerts.js"></script>
    <script src="js/bootstrap-twipsy.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tabs.js"></script>
    <script src="js/bootstrap-buttons.js"></script>
    
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    
    <script>
	alert('ni');
	$(document).ready(function(){
		alert('dready');
		$('#topbar').dropdown();
	}

	</script>
	
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

	<!-- TOP BAR -->
	<? include 'topbar.php' ?>

    <div class="container">

        
        <div class="alert-message warning">
          <a class="close" href="#">×</a>
          <p><strong>Holy guacamole!</strong> Art Of MeMe est disponnible en Français, voulez-vous changer votre langue par defaut ?</p>
          <div class="alert-actions">
                <a class="btn small" href="#">Oui merci</a> <a class="btn small" href="#">No thanks</a>
           </div>
        </div>



      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        <p><a class="btn primary large" href="shop.php">Shop like a boss !</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span-one-third">
          <h2>Focus Artiste</h2>
          <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span-one-third">
          <h2>Focus MeMe</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span-one-third">
          <h2>Focus Produit</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>


	<!-- FOOTER-->
	<? include 'footer.php' ?>
    </div> <!-- /container -->

  </body>
</html>
