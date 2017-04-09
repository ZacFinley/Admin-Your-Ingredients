 <?php
 include '../inc/header.php';
 ?>

<?php
  $usr = '';
  $pwd = '';
          
  if (isset ($_POST['usr'])){
    $usr = $_POST['usr'];
  }
  if(isset ($_POST['pwd'])){
    $pwd = $_POST['pwd'];
  }
          
  $acceptedPwd1 = '$2y$10$LeWXPcRKOrfVqBLrhl91A.St.t6GpHOAFPEhhwbpHoBCkue6TltT6';
  $acceptedPwd2 = '$2y$10$V.xCLLYHUiC82.qD5571PeMI55RSnmibhGTyj6JWAGUlb58LilZLG';
  $acceptedPwd3 = '$2y$10$CdHe1.9iKVrlwov00TO3cOx39AEWdv5.zJ/md.ATyz2ETho.z0xSq';

  $date = date_create();
?>

<?php if (($usr == "jurentie" && password_verify([$pwd,$acceptedPwd1) || 
    ($usr == "findawg" && password_verify([$pwd,$acceptedPwd2) || 
    ($usr == "ct310" && password_verify([$pwd,$acceptedPwd3)) : ?>

<?php 
  $_SESSION['isLoggedIn'] = true;
  $_SESSION['user'] = $usr;
  header('Location:../index.php');
?>

<?php elseif (((!empty($usr)) && ($usr != 'jurentie' || $usr != "ct310")) || ((!empty($pwd)) && ($pwd !== $acceptedPwd1 || $pwd !== $acceptedPwd2))) : #|| ($pwd !== $acceptedPwd1 || $pwd !== $acceptedPwd2 ))  : ?>

      <p style="text-align:center;">Sorry, Username and Password do not match. Please try again.</p>

        <div class="row">
          <div class="col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5
             col-sm-offset-4 col-xs-offset-3">
              <div class="login" style="width:200px;">
                <form action = "#" method = "POST">
                  <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control" name="usr">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pwd">
                  </div>
                  <input type = "submit" />
                </form>
              </div>
            </div>
         </div>

<?php else : ?>
  <p style="text-align:center;">Please Enter Your Username and Password: </p>
    <div class="row">
        <div class="col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5
             col-sm-offset-4 col-xs-offset-3">
           <div class="login" style="width:200px;">
             <form action = "#" method = "POST">
               <div class="form-group">
                  <label for="usr">Name:</label>
                  <input type="text" class="form-control" name="usr">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" name="pwd">
                </div>
                <input type = "submit" />
              </form>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php include '../inc/footer.php'; ?>
