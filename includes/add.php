<?php
include_once "functions.php";
if (!isset($_SESSION['user']['id'])) {
    header('Location: ' . get_url());
    die;
}

if (isset($_POST['link']) && !empty($_POST['link'])) {
if (add_link($_POST['link'])) {
    $_SESSION['success'] = 'Ссылка успешно добавлена!';
}else{
    $_SESSION['error'] = 'Во время добавления ссылки, что-то пошло не так!';
}
}
header('Location: ' . get_url('profile.php'));
die;

?>