<?php 
include_once "functions.php";

if (!isset($_SESSION['user']['id'])) {
	header('Location: ' . get_url());
	die;
}

if (isset($_POST['link_id']) && !empty($_POST['link_id']) && isset($_POST['link']) && !empty($_POST['link'])) {
    $link_id = $_POST['link_id'];
    if (is_owner_link($link_id)) edit_link($link_id, $_POST['link']);
}

header('Location: ' . get_url('profile.php'));
die;
?>