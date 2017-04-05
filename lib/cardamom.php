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
				<div class="col-lg-12"><h1>Cardamom</h1></div>
			</div>

			&nbsp; &nbsp;

			<!-- 2nd Row -->
			<div class="row visible-on">
				<!-- 1st Column stretching 6 Grid Blocks -->
				<div class="col-lg-6">
					<h3 style="text-align:center;">Cardamom</h3>
					&nbsp; &nbsp;
					<div class = "message">
					<p><blockquote>Cardamom is a spice native to the Middle East, North Africa, and Scandinavia. 
					There are three types of cardamom; green cardamom, black cardamom and Madagascar cardamom. 
					It is best to buy cardamom still in the pods, which are removed and discarded. 
					You can also buy cardamom seeds however; they lose much of their flavor. 
					Ground cardamom has even less flavor than the fresher ones. Most recipes usually call for green cardamom. 
					Cardamom has a strong, unique spicy-sweet taste, which is slightly aromatic. Cardamom is more expensive than average spices. 
					A little goes a long way. If a recipe calls for 10 pods that would equal 1 ½ tsp ground. Ground cardamom is readily available and found in grocery stores.
					</blockquote></p>
					<p><cite><a href="http://www.food.com/about/cardamom-319">"Cardamom" by food.com </cite>
					</div>
				</div>

				<!-- 2nd Column, contains carousel -->

				<div class="col-lg-5">
					<h3></h3>

					<!---Carousel
					I just copied the w3school demo, feel free to edit -->
					<div id="Cardamom" class="carousel slide" data-ride="carousel">
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
									<img src="../assets/image/green-cardamom.jpg" alt="green-cardamom">
								</a>
								<div class="carousel-caption">
									<h3><a href="http://allrecipes.com/recipes/1130/ingredients/herbs-and-spices/spices/cardamom/">Cardamom recipes</a></h3>
									<p>Cardamom</p>
									<!-- adding source for image -->
									<p>Image Source : <a href="http://food.ndtv.com/ingredient/green-cardamom-701031"
										target="_blank">
										food.ndtv.com</a></p>
								</div>
							</div>

							<div class="item">
								<a href="#">
								<img src="../assets/image/cardamom-pods.jpg" alt="cardamom-pods">
								</a>
								<div class="carousel-caption">
									<h3><a href="http://allrecipes.com/recipes/1130/ingredients/herbs-and-spices/spices/cardamom/">Cardamom recipes</a></h3>
									<p>Cardamom</p>
									<p>Image Source : <a href="https://aromaticstudies.com/cardamom-queen-of-spices/"
										target = "_blank">aromaticstudies.com</a></p>
								</div>
							</div>

							<div class="item">
								<a href="#">
									<img src="../assets/image/cardamom-ground.jpg" alt="cardamom-ground">
								</a>
								<div class="carousel-caption">
									<h3><a href="http://allrecipes.com/recipes/1130/ingredients/herbs-and-spices/spices/cardamom/">Cardamom recipes</a></h3>
									<p>Cardamom</p>
									<p>Image Source : <a href="http://www.thehomesteadgarden.com/the-spice-series-cardamom/"
										target="_blank">thehomesteadgarden.com</a></p>
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#Cardamom" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#Cardamom" role="button" data-slide="next">
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