<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Art Of MeMe : Memes</title>
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

    <div class="container-fluid">
      <div class="sidebar">
        <div class="well">
          <h5>Sidebar</h5>
          <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
          <h5>Sidebar</h5>
          <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
          <h5>Sidebar</h5>
          <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div>
      </div>
      <div class="content">
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
			<li><a href="shop.html">Shop</a> <span class="divider">/</span></li>
            <li class="active">Memes</li>
          </ul>
          
        <div class="hero-unit">
                  <h1>About MeMe</h1>
                  <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                  <p><a class="btn secondary large" href="shop.html">More about MeMe</a></p>
        </div>  
        <!-- Example row of columns -->
        <div class="row">
          <div class="span6">
              <h2>Meme 1</h2>
              <a href="meme.html">
                <img class="thumbnail" src="http://placehold.it/330x300" alt="">
              </a>
              <p>Donec id elit non mi porta gravida at eget metus. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
              <h2>Meme 2</h2>
              <a href="meme.html">
                <img class="thumbnail" src="http://placehold.it/330x300" alt="">
              </a>
              <p>Donec id elit non mi porta gravida at eget metus. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
              <h2>Meme 3</h2>
              <a href="meme.html">
                <img class="thumbnail" src="http://placehold.it/330x300" alt="">
              </a>
              <p>Donec id elit non mi porta gravida at eget metus. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
              <h2>Meme 4</h2>
              <a href="meme.html">
                <img class="thumbnail" src="http://placehold.it/330x300" alt="">
              </a>
              <p>Donec id elit non mi porta gravida at eget metus. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
              <h2>Meme 5</h2>
              <a href="meme.html">
                <img class="thumbnail" src="http://placehold.it/330x300" alt="">
              </a>
              <p>Donec id elit non mi porta gravida at eget metus. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
        </div>
       
        <div class="row show-grid">
            <div class="span10 offset2">
                <div class="pagination">
                  <ul>
                    <li class="prev disabled"><a href="#">&larr; Previous</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#">Next &rarr;</a></li>
                  </ul>
                </div>         
            </div>
         </div>
       

       
		<!-- FOOTER-->
		<? include 'footer.php' ?>       

      </div>
    </div>

  </body>
</html>