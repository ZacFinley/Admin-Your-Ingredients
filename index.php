 <?php
 $index = TRUE;
 include './inc/control.php'; 
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

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="description" content="Ingredients Page for CT310 Project">
    <meta name="keywords" content="html, css, bootstrap, web devlopment, Justin Rentie, CSU,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href=".assets/image/Fork.ico">
    <title>The Ingredient Shop</title>
  </head>
  

  <body>

  <!-- JUMBOTRON -->
  <div class = "container">
    <div class="jumbotron">
        <h1>The Ingredients Shop</h1>
        <p> We specialize in 3 ingredients</p>
  </div>
    </div>

  <!-- NAVBAR -->
  <!-- need to add links to other pages -->
    <div class = "container">
    <nav class="navbar navbar-custom">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- need to add link -->
          <a class="navbar-brand" href="./lib/home.php">Shop Home</a>
        </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingredients<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <!-- need to add link -->
              <li><a href="./lib/cardamom.php">Cardamom</a></li>
              <li><a href="./lib/sorrel.php">Sorrel</a></li>
              <li><a href="./lib/yams.php">Yam</a></li>
            </ul>
            <!-- need to add link -->
            <li><a href="./lib/aboutus.php">About Us</a>
      </div>
      </div>
    </nav>
  </div>


<?php if (($usr == "jurentie" && md5($pwd) === $acceptedPwd1) || 
    ($usr == "findawg" && md5($pwd) === $acceptedPwd1) || 
    ($usr == "ct310" && md5($pwd) === $acceptedPwd2)) : ?>

      <p></p>
      <p style = "text-align:center;"> Hello, <?php echo $_SESSION["user"]=$usr; //echo $usr ?></p>
      <p style = "text-align:center;"> Your username and password was A-Okay and you're authenticated</p>
      <p style = "text-align:center;"> Click <a href="./lib/home.php" style="color:black; text-decoration:underline;">here</a> to continue to website.</p>

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

<?php include './inc/footer.php'; ?>