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
          
  $acceptedPwd1 = '5f4dcc3b5aa765d61d8327deb882cf99';
  $acceptedPwd2 = '';

  $date = date_create();
?>

<?php if (($usr == "jurentie" && md5($pwd) === $acceptedPwd1) || 
    ($usr == "findawg" && md5($pwd) === $acceptedPwd1) || 
    ($usr == "ct310" && md5($pwd) === $acceptedPwd2)) : ?>

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