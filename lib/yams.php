<?php
include '../inc/header.php';
include '../inc/control.php';
?>

<!-- MAIN BODY -->
	<div class = "container">
		<div class = "maincontent">
			<!--Header-->
			<!-- 1 Row stretching 12 Grid Block -->
			<div class="row visible-on" style="text-align:center;">
				<div class="col-lg-12"><h1>Yams</h1></div>
			</div>

			&nbsp; &nbsp;

			<!-- 2nd Row -->
			<div class="row visible-on">
				<!-- 1st Column stretching 6 Grid Blocks -->
				<div class="col-lg-6">
					<h3 style="text-align:center;">Yams</h3>
					&nbsp; &nbsp;
					<div class = "message">
					<p><blockquote> Yams are the tuberous roots of the genus Dioscorea. 
					They’re native to parts of Asia and Africa, and can grow to weigh over 100 pounds. 
					The word yam is derived, via Portuguese or Spanish, from a West African language called Wolof. 
					The Wolof word nyam means “to sample” or “taste.”  Similar words in other African languages for yam mean “to eat” and “to chew.”.
					</blockquote></p>
					<p><cite><a href="http://blog.dictionary.com/yams-sweet-potatoes/">"Are These Yams or Sweet Potatoes?" by Dictionary.com </cite>
					</div>
				</div>

				<!-- 2nd Column, contains carousel -->

				<div class="col-lg-5">
					<h3></h3>

					<!---Carousel 
					I just copied the w3school demo, feel free to edit -->
					<div id="Yams" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<!-- image on carousel doubles as link to ingredients page-->
								<a href="#">
									<img src="../assets/image/yam.jpg" alt="yam">
								</a>
								<div class="carousel-caption">
									<h3><a href="http://allrecipes.com/recipes/2452/fruits-and-vegetables/vegetables/yams/">Yam recipes</a></h3>
									<p>Yummy Yams</p>
									<!-- adding source for image -->
									<p>Image Source : <a href="http://www.stylecraze.com/articles/health-benefits-of-cardamom/#gref"
										target="_blank">
										Stylecraze</a></p>
								</div>
							</div>

							<div class="item">
								<a href="#">
								<img src="../assets/image/yam2.jpg" alt="yam2">
								</a>
								<div class="carousel-caption">
									<h3><a href="http://allrecipes.com/recipes/2452/fruits-and-vegetables/vegetables/yams/">Yam recipes</a></h3>
									<p>Yummy Yams</p>
									<p>Image Source : <a href="http://www.tastespotting.com/features/garlic-thyme-roasted-sweet-potatoes-recipe"
										target = "_blank">tablespotting.com</a></p>
								</div>
							</div>

							<div class="item">
								<a href="#">
									<img src="../assets/image/yam1.jpg" alt="yam1">
								</a>
								<div class="carousel-caption">
									<h3><a href="http://allrecipes.com/recipes/2452/fruits-and-vegetables/vegetables/yams/">Yam recipes</a></h3>
									<p>Yummy Yams</p>
									<p>Image Source : <a href="http://blog.dictionary.com/yams-sweet-potatoes/"
										target="_blank">blog.dictionary.com</a></p>
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#Yams" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#Yams" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

				</div>
			</div>
		</div>

		<!-- 3rd Row -->
		<!-- I added this third row because I can't think
		of a better way to add padding to the bottom of the maincontent
		instide the sqare white div block -->

		<div class="row visible-on">
			<div class="col-lg-6"><p>            </p></div>
		</div>

	</div>
	
<form class="comments" form method='post'>
  Username: <input type='text' input name='username' id='name' /><br />
  Comment:<br />
  <textarea name='comment' id='comment'></textarea><br />

  <input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />
  
  <h5>Comments</h5>
	<?php if(isset($_POST['username'])){
		$commenter=$_POST['username'];
		if($commenter == $_SESSION["user"]){
			$comment=filter_var($_POST['comment']);
			$date=date("m/d/Y");
			date_default_timezone_set('America/Denver');
			$time=date("h:i:sa");
			echo "User: " .$_SESSION['user']. "<br>";
			echo "Comment: " .$comment."<br>";
			echo "Date/Time: " .$date. ',' .$time. "<br>";
		}
		else{
			echo "User not validated";
		}
		
	}
	?>
	<br>
  <input type='submit' value='Submit' />
</form>

<?php include '../inc/footer.php'; ?>