<?php 
include '../inc/header.php';
include '../inc/control.php';
include '../inc/database.php';
include './create.php';

$dbh = new Database();
$ingredient = $dbh->getIngredient('Yams');
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
				<div class="col-lg-12"><h1>Yams</h1></div>
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
					<p><cite><a href="http://blog.dictionary.com/yams-sweet-potatoes/">"Are These Yams or Sweet Potatoes?" by Dictionary.com</a></cite>
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

  					<input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />
  
  					<h5>Comments</h5>
					<?php if($_SESSION['user'] != 'Guest'){
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
					?>
					<br>
  					<input type='submit' value='Submit' />
					</form>
				</p>
			</div>
		</div>
	</div>
	
<!--<form class="comments" form method='post'>
  Username: <input type='text' input name='username' id='name' /><br />
  Comment:<br />
  <textarea name='comment' id='comment'></textarea><br />

  <input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />
  
  <h5>Comments</h5>
	<?/*php if(isset($_POST['username'])){
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
		
	}*/
	?>
	<br>
  <input type='submit' value='Submit' />
</form>-->

<?php include '../inc/footer.php'; ?>