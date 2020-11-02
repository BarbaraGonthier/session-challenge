<?php
session_start();
if(empty($_SESSION['login']))
{
    header('Location: /login.php');
    exit();
}
?>
<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <h2>Votre panier :</h2>
        <p><?= implode(", ", $catalog[$_SESSION['cookie']]); ?></p>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
