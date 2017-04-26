<?php require "backend/config.php"; ?>
<?php
$placeHolder = "Type In an Ingredient";
if ($_GET["ingredient"]) {
	$placeHolder = $_GET["ingredient"];
}
?>


<header class="container main">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
		<a href="index.php"><img src="img/logo.png" alt="Avocado Logo" title="Avocado"></a>
	</div>

	<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-7 col-xs-8">
		<form action="listing.php" method="get">
			<input type="textbox" placeholder="<?php echo $placeHolder; ?>" class="searchbox" name="ingredient">
			<input type="submit" value="submit" class="submit">
		</form>
	</div>

	<div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-3">
		<?php
		$href = "authentication.php";
		if (isset($_COOKIE[$GLOBALS["cookie_pass_name"]])) {
			$href = "insertRecipe.php";
		}
		?>
		<a href="<?php echo $href; ?>" class="add-own">add your own</a>
	</div>
</header>