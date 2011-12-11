<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Art Of MeMe : Artist N piece N</title>
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

        
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
			<li><a href="artists.php">Artists</a> <span class="divider">/</span></li>
            <li><a href="artist.php">Artiste N</a> <span class="divider">/</span></li>
          <li class="active">Piece N</li>
        </ul>



      <!-- Main hero unit for a primary marketing message or call to action -->

        <img class="thumbnail" src="http://placehold.it/940x330" alt="">


        

        <div class="row show-grid" title="One-third and two-thirds layout">
             <div class="span-two-thirds">
                 <img class="thumbnail" src="http://placehold.it/600x849" alt="">
             </div>
            <div class="span-one-third">

                      <h2>Headings &amp; copy</h2>
                      <p>A standard typographic hierarchy for structuring your webpages.</p>
                      <p>The entire typographic grid is based on two Less variables in our variables.less file: <code>@basefont</code> and                      <code>@baseline</code>. The first is the base font-size used throughout and the second is the base line-height.</p>
                      <p>We use those variables, and some math, to create the margins, paddings, and line-heights of all our type and more.</p>


					<div class="clearfix">
					            <label for="stackedSelect">Select you size dude</label>
					            <div class="input">
					              <select name="stackedSelect" id="stackedSelect">
					                <option>A4</option>
					                <option>A3</option>
					              </select>
					            </div>
					          </div>
							<br />
                      <a class="btn primary large">Add to cart</a>
            </div>
           
          </div>

		<!-- FOOTER-->
		<? include 'footer.php' ?>

    </div> <!-- /container -->

  </body>
</html>
