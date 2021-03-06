<?php 
include '../inc/header.php';

$url = $_SERVER['QUERY_STRING'];
$ingredientName = substr($url, strpos($url, "=") + 1); 

//$dbh = new Database();
$ingredient = $dbh->getIngredient($ingredientName);
$name = $ingredient[0];
$description = $ingredient[1];
$image = $ingredient[2];
?>	

<!-- MAIN BODY -->
	<div class = "container">
		<div class = "maincontent">
			<!--Header-->
			<!-- 1 Row stretching 12 Grid Block -->
			<div class="row visible-on" style="text-align:center;">
				<div class="col-lg-12"><h1><?php echo $name; ?></h1></div>
			</div>

			&nbsp; &nbsp;

			<!-- 2nd Row -->
			<div class="row visible-on">
				<!-- 1st Column stretching 6 Grid Blocks -->
				<div class="col-lg-6">
					<h3 style="text-align:center;"><?php echo $name;?></h3>
					&nbsp; &nbsp;
					<div class = "message">
					<p><blockquote> <?php echo $description?>
					</blockquote></p>
					</div>
				</div>

				<!-- 2nd Column, contains carousel -->

				<div class="col-lg-5">
					<h3></h3>
					<div class="image">
						<?php echo "<img src='{$image}' alt='{$name}' style='width:420px;height:400px;'>"; ?>
					</div>
			</div>
		</div>

		<!-- 3rd Row -->
		<!-- I added this third row because I can't think
		of a better way to add padding to the bottom of the maincontent
		instide the sqare white div block -->

		<div class="row visible-on">
			<div class="col-lg-12">
				<p>
					<form class="comments" form method='post'>
  					Comment:<br />
  					<textarea name='comment' id='comment' rows="4" cols="60">If you are logged in, feel free to leave a comment. Thanks!</textarea><br />

  					<input type='submit' value='Submit' />

  					<input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />
  					<p>
  					<?php if(isset($_POST['comment'])){
						if($_SESSION['user'] != "Guest"){
							$comment=filter_var($_POST['comment']);
							$date=date("m/d/Y");
							date_default_timezone_set('America/Denver');
							$time=date("h:i:sa");
							$ip = $_SERVER['REMOTE_ADDR'];
							$date = $date. ',' .$time. "";
							$dbh->writeComment($_SESSION['user'], $comment, $ip, $date, $name);
							}else{
								echo "Please log in to leave a comment.";
							}
						}
					?>
					</p>
  					<h5>Comments</h5>
  					<?php $comments = $dbh->getComments($name); 
  						foreach($comments as $c){
  							echo $c . "<br>";
  						}?>
					<br>
					</form>
				</p>
			</div>
		</div>
	</div>

<?php include '../inc/footer.php'; ?>