<!-- <?php

if(isset($_SESSION['Rgerror']))
{
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?= $_SESSION['Rgerror']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php

unset($_SESSION['Rgerror']);
}

?> -->

<?php
if(isset($_SESSION['Rgerror']))
{

?>

    <div class="me" role="alert">
        <?= $_SESSION['Rgerror']; ?>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
    </div>
    <?php 
    unset($_SESSION['Rgerror']);
}
?>

<!-- message session start for alert  -->
<?php
if(isset($_SESSION['message']))
{

?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php 
    unset($_SESSION['message']);
}
?>
<!-- success session start -->
<?php
if(isset($_SESSION['success']))
{

?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?= $_SESSION['success']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php 
    unset($_SESSION['success']);
}
?>

<!-- error session start -->
<?php
if(isset($_SESSION['error']))
{

?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?= $_SESSION['error']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php 
    unset($_SESSION['error']);
}
?>