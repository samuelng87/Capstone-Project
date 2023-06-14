<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-success" role="alert">
        <strong></strong> <?= $_SESSION['message']; ?>
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>