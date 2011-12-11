<!DOCTYPE html>
<html lang="en">
  	<!-- HEADER -->
	<? include 'header.php' ?>

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
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
			<li><a href="shop.php">Shop</a> <span class="divider">/</span></li>
			<li><a href="memes.php">MeMes</a> <span class="divider">/</span></li>
            <li class="active">MeMe N</li>
          </ul>
        <!-- Example row of columns -->
        <div class="hero-unit">
                  <h1>MeMe name</h1>
                  <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div>
        <div class="row">
                <div class="span-one-third">
                  <h2>About</h2>
                  <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                  <p><a class="btn" href="#">More on Wikipedia</a></p>
                </div>
                <div class="span-one-third">
                  <h2>Origin</h2>
                   <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                  <p><a class="btn" href="#">More on Wikipedia</a></p>
               </div>
                <div class="span-one-third">
                  <h2>Spread</h2>
                  <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                  <p><a class="btn" href="#">More on Wikipedia</a></p>
                </div>
              </div>
           <br/>
           <h1>Posters</h1>   
             <br/>
        <div class="row">
          <div class="span6">
              <h2>Piece 1</h2>
              <a href="piece.php">
                <img class="thumbnail" src="http://placehold.it/330x467" alt="">
              </a>
              <p>Donec id elit non mi porta gravida at eget metus. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
              <h2>Piece 2</h2>
              <a href="piece.php">
                <img class="thumbnail" src="http://placehold.it/330x467" alt="">
              </a>
              <p>Donec id elit non mi porta gravida at eget metus. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
        </div>
           <h1>Stickers</h1>   
             <br/>
        <div class="row">
          <div class="span6">
              <h2>Piece 1</h2>
              <a href="piece.php">
                <img class="thumbnail" src="http://placehold.it/330x467" alt="">
              </a>
              <p>Donec id elit non mi porta gravida at eget metus. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
              <h2>Piece 2</h2>
              <a href="piece.php">
                <img class="thumbnail" src="http://placehold.it/330x467" alt="">
              </a>
              <p>Donec id elit non mi porta gravida at eget metus. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
              <h2>Piece 3</h2>
              <a href="piece.php">
                <img class="thumbnail" src="http://placehold.it/330x467" alt="">
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