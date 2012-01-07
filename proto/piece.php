<!DOCTYPE html>
<html lang="en">
  	<!-- HEADER -->
	<? include 'header.php' ?>

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
                      <a id="addtocart" class="btn primary large">Add to cart</a>
            </div>
           
          </div>

		<!-- FOOTER-->
		<? include 'footer.php' ?>

    </div> <!-- /container -->

  </body>
</html>
