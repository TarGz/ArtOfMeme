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
          <h5>MeMe</h5>
          <ul>
            <li><a href="#">MeMe1</a></li>
            <li><a href="#">MeMe2</a></li>
            <li><a href="#">MeMe3</a></li>
            <li><a href="#">MeMe4</a></li>
            <li><a href="#">...</a></li>
          </ul>
          <h5>Artist</h5>
          <ul>
            <li><a href="#">Artist1</a></li>
            <li><a href="#">Artist2</a></li>
            <li><a href="#">Artist3</a></li>
            <li><a href="#">…</a></li>
          </ul>
          <h5>Color</h5>
		  <div class="row show-grid" title="16 column layout">   
		    <a href="#" style="background-color: #FF5335; margin-top:10px;" class="span1">&nbsp;</a>
		    <a href="#" style="background-color: #B29C85; margin-top:10px;" class="span1">&nbsp;</a>
		    <a href="#" style="background-color: #306E73; margin-top:10px;" class="span1">&nbsp;</a>
		    <a href="#" style="background-color: #3B424C; margin-top:10px;" class="span1">&nbsp;</a>
		    <a href="#" style="background-color: #1D181F; margin-top:10px;" class="span1">&nbsp;</a>
		    <a href="#" style="background-color: #FFFFFF; margin-top:10px;" class="span1">&nbsp;</a>
		  </div>
          <h5>Poster size</h5>
          <ul>
            <li><a href="#">A4</a></li>
            <li><a href="#">A3</a></li>
          </ul>
          <h5>Print quality</h5>
          <ul>
            <li><a href="#">Lithography</a></li>
            <li><a href="#">Numeric</a></li>
          </ul>
        </div>
      </div>
      <div class="content">
        
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a> <span class="divider">/</span></li>
          <li>Shop</li><span class="divider">/</span>
          <li class="active">Posters</li>
        </ul>
        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit">
          <h1>Hello, world!</h1>
          <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div>
        <!-- Example row of columns -->
        <div class="row">
          <div class="span6">
            <h2>Poster 1</h2>
            <a href="meme.php">
              <img class="thumbnail" src="http://placehold.it/330x330" alt="">
            </a>
            <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
            <h2>Poster 2</h2>
            <a href="meme.php">
              <img class="thumbnail" src="http://placehold.it/330x330" alt="">
            </a>
            <p><a class="btn" href="#">View details &raquo;</a></p>
         </div>
          <div class="span6">
            <h2>Poster 3</h2>
            <a href="meme.php">
              <img class="thumbnail" src="http://placehold.it/330x330" alt="">
            </a>
            <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
            <h2>Poster 4</h2>
            <a href="meme.php">
              <img class="thumbnail" src="http://placehold.it/330x330" alt="">
            </a>
            <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
            <h2>Poster 5</h2>
            <a href="meme.php">
              <img class="thumbnail" src="http://placehold.it/330x330" alt="">
            </a>
            <p><a class="btn" href="#">View details &raquo;</a></p>
         </div>
          <div class="span6">
            <h2>Poster 6</h2>
            <a href="meme.php">
              <img class="thumbnail" src="http://placehold.it/330x330" alt="">
            </a>
            <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span6">
            <h2>Poster 7</h2>
            <a href="meme.php">
              <img class="thumbnail" src="http://placehold.it/330x330" alt="">
            </a>
            <p><a class="btn" href="#">View details &raquo;</a></p>
         </div>
          <div class="span6">
            <h2>Poster 8</h2>
            <a href="meme.php">
              <img class="thumbnail" src="http://placehold.it/330x330" alt="">
            </a>
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