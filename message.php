<?php
session_start();
$connection= mysqli_connect("localhost","root","","vijaya_theater");
?>

<!-- home main movie button -->
<?php
            if(isset($_POST['watch-btn']))
            {
                if(empty($_SESSION['username']))
                {
                    header('Location: login.php');
                }
                else
                {
                    header('Location: main_movie.php');
                }
                
            }

//  home second movie button 
            if(isset($_POST['watch-btn2']))
            {
                if(empty($_SESSION['username']))
                {
                    header('Location: login.php');
                }
                else
                {
                    header('Location: movie2.php');
                }
                
            }
    
            

?>

<!-- message session start for alert  -->
<?php
if(isset($_SESSION['message']))
{

?>

    <div class="me" role="alert">
        <?= $_SESSION['message']; ?>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
    </div>
    <?php 
    unset($_SESSION['message']);
}
?>