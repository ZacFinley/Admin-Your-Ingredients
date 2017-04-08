<?php 
include '../inc/header.php';
include './create.php';

$max_file_size = 1000000;

$title = "Handling Files";
$page_name = "home";
$max_file_size = 1000000; // small
$db = new Database ();

if ($_FILES && isset ( $_FILES ["image"] )) { 
    if ($_FILES ["image"] ["error"] == UPLOAD_ERR_OK) {
        if ($_FILES ["image"] ["size"] > $max_file_size) {
            $error_msg = "File is too large.";
        } else {
            $ext = parseFileSuffix ( $_FILES ['image'] ['type'] );
            if ($ext == '') {
                $error_msg = "Unknown file type";
            } else {
                    $filename = $_POST['name'];
                    //Moves image from files -> new Location
                    move_uploaded_file ( $_FILES ["image"] ["tmp_name"], dirname(__DIR__) . "/assets/image/" . $filename . "." . $ext );
                    $imagePath = "../assets/image/" . $filename . "." . $ext;
            }
        }
    } else if ($_FILES ["image"] ["error"] == UPLOAD_ERR_INI_SIZE || $_FILES ["image"] ["error"] == UPLOAD_ERR_FORM_SIZE) {
        $error_msg = "File is too large.";
    } else {
        $error_msg = "An error occured. Please try again. <!-- " . $_FILES ["image"] ["error"] . " -->";
    }
}

    if(isset($_POST['comment']) && isset($_POST['name']) && $_FILES['image']){
        $dbh->addIngredient($_POST['name'], $_POST['comment'], $imagePath);
        echo $_POST['name'];
    }

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
				<!--<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-upload" aria-label="Upload"></span>
				</button>-->
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
			</div>
		</div>
	</div>

<?php
/* Support functions for handling image upload above. */
function parseFileSuffix($iType) {
    if ($iType == 'image/jpeg') {
        return 'jpg';
    }
    if ($iType == 'image/gif') {
        return 'gif';
    }
    if ($iType == 'image/png') {
        return 'png';
    }
    if ($iType == 'image/tif') {
        return 'tif';
    }
    return '';
}

?>    

<?php include '../inc/footer.php'; ?>