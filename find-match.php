<?php
    require_once('_inc/header.php');
    require_once('_inc/find-match-header.php');
    $user_id = $_SESSION['id'];
    $matches = new LetZC_Match($user_id,$mysqli,$homepath);
?>
<link rel="stylesheet" href="css/find-match.css" />
    <div class="container marketing">
        <div class="col-lg-12 findlocal">
            <center>
                Find a Local
            </center>
        </div>
<div class="col-lg-12" id="category-filters">
    <?php echo $matches->categoryDropdown(); ?>
</div>
<?php echo $matches->matchList($user_id,9); ?>
<?php require_once('_inc/footer.php'); ?>