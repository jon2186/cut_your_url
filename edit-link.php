<?php 
include_once "includes/functions.php";

if (!isset($_SESSION['user']['id'])) {
	header('Location: ' . get_url());
	die;
}

if(isset($_GET['link']) && !empty($_GET['link'])) {
	$short_link = $_GET['link'];

	$link = get_link_info($short_link);
	if (empty($link) || !is_owner_link($link['id'])) {
		header('Location: ' . get_url('profile.php'));
		die;
	}
}

include_once "includes/header_profile.php"; 
?>
<main class="container">
<div class="row mt-5">
	<div class="col">
		<h2 class="text-center">Редактирование ссылки</h2>
	</div>
</div>
	<div class="row mt-3">
		<div class="col-4 offset-4">
			<form action="<?php echo get_url('includes/edit.php'); ?>" method="POST">
				<div class="mb-3">
					<label for="link-input" class="form-label">Новая ссылка</label>
					<input type="text" class="form-control" id="link-input" required name="link" value="<?php echo $link['long_link'] ?>">
				</div>
				<input type="hidden" name="link_id" value="<?php echo $link['id'] ?>">
				<button type="submit" class="btn btn-warning">Редактировать</button>
			</form>
		</div>
	</div>
</main>
<?php 
include "includes/footer.php"; 
?>
