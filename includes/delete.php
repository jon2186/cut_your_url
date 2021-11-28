<?php 
include "functions.php";

if (!isset($_SESSION['user']['id'])) {
    header('Location: ' . get_url());
    die;
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    if (is_owner_link($_GET['id'])) delete_link($_GET['id']);
}

header('Location: ' . get_url('profile.php'));
die;
?>