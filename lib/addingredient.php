<?php 
include '../inc/header.php';
include '../inc/Database.php';
//include '../inc/comment.php';
include './create.php';

?>	

<!-- MAIN BODY -->
	<div class = "container">
		<div class = "maincontent">
			<!--Header-->
			<!-- 1 Row stretching 12 Grid Block -->
			<div class="row visible-on" style="text-align:center;">

				&nbsp; &nbsp;
				<form method="post" enctype="multipart/form-data" class="form-inline">
                Ingredient Name:<br>
                <input type="text" name="name">
                <br><br>
                
				<div class="form-group">
					<label class="sr-only" for="image">Upload Image</label> 
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" /> 
					<input type="file" class="form-control" name="image" id="image" />
				</div>
				<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-upload" aria-label="Upload"></span>
				</button>
                </form>
                <br>
          
			
            Description:
            <p></p>
            <textarea name='comment' id="comment">
            </textarea><br>
            <input type="hidden" value="done" name="comment1"><br>
            <input type="submit" value="Submit">
                
            &nbsp; &nbsp;
            <p></p>

            </form>
            
            <?php
            $stringData = "";
            if(isset($_POST['name'])){
                $stringData = $_POST['name'] .','. $_POST['image'] .','. $_POST['comment1'] ."\n";
                echo $stringData;
                }
                
            
            
            ?>
			</div>
		</div>
	</div>

<?php include '../inc/footer.php'; ?>