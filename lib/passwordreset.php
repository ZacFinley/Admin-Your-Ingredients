<?php 
include '../inc/header.php';
include './create.php';

?>  

<!-- MAIN BODY -->
    <div class = "container">
        <div class = "maincontent">
            <!--Header-->
            <!-- 1 Row stretching 12 Grid Block -->
            <div class="row visible-on" style="text-align:center;">

               <br>
            
             
            <?php
            $_GET['newPassword'] = NULL;
            $_GET['confirmPassword'] = NULL;
            //$url =$_SERVER['REQUEST_URI'];
            //echo $url;
            //echo substr($url,41)."\n";
            //echo $_SESSION['forgotPassKey'];
            $query = $_SERVER['QUERY_STRING'];
            //echo $query; // Outputs: Query String
            echo $_SESSION['user'];
    
            if ($query == $_SESSION['forgotPassKey']){
                ?>
                <form action="https://www.cs.colostate.edu/~findawg/assignment_6/assignment6.php" method="GET">
                
                New Password:<br>
                <input type="password" name="newPassword">
                <br>
                Confirm New Password:<br>
                <input type="password" name="confirmPassword">
                <br>
                <br>
                
                <input type="submit" value="Submit">
                
            </form>
            
            
            
            
            <?php
            
            
            
            
            
            $stringData = "";
            $csvFile = "users.csv";
            $fh = fopen($csvFile, 'a') or die("can't open file");
            
            $passHash1;
            
            
            
            
            $tempUser = $_SESSION['user'];
            $tempEmail = $_SESSION['email'];
            
            $newPass = $_GET['newPassword'];
            $confirmPass = $_GET['confirmPassword'];
            
            
             if ($newPass == $confirmPass){
                 $passHash1 = password_hash($confirmPass, PASSWORD_BCRYPT);
                     $stringData = $tempUser .','. $passHash1 .','. $tempEmail . "\n";
                     //echo $stringData;
                    fwrite($fh, $stringData);
                    fclose($fh);
                 
             }
            
            
                
            }
            

            ?>
               
            </div>
        </div>
    </div>

<?php include '../inc/footer.php'; ?>