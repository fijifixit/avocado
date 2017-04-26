<?php require 'header.php'; ?>
<?php require 'header-main.php'; ?>
<?php require 'backend/selectRecipes.php'; ?>
<?php
$title = "All Recipes";
if ($_GET["ingredient"]) {
	$title = $_GET["ingredient"];
}
?>


<div class="top-alt">
	<h1><?php echo $title; ?></h1>
</div>

<div class="main-list">
	<ul class="container recipe-list">
		<?php
		while($row = mysql_fetch_array($result)) {
		?>
		<li class="col-lg-4 col-md-4 col-sm-6">
			<a href="recipe.php?id=<?php echo $row['id'] ;?>">
				<div class="recipe">
					<div class="img-container">
						<img src="<?php echo ($row["image"] ? $row["image"] : "backend/uploads/default.png"); ?>">
					</div>
					<div class="text">
						<h3><?php echo $row["name"]; ?></h3>
						<p class="author">By <?php echo getUsernameById($row["username"]); ?></p>
						<p class="desc"><?php echo $row["description"]; ?></p>
					</div>
					<div class="icons">
						<img src="img/icons/skill.png">
						<p class="skill-level"><?php echo $row["skillrequired"]; ?>/10</p>

						<img src="img/icons/time.png">
						<p class="time"><?php echo $row["cookingtime"]; ?> mins</p>

						<?php if ($row["suitableforvegetarians"]) {?>
						<img src="img/icons/veg.png" class="veg">
						<?php }?>

						<?php if ($row["spicy"]) {?>
						<img src="img/icons/spicy.png">
						<?php }?>

					</div>
				</div>
			</a>
		</li>
		<?php }?>
	</ul>
</div>

<?php require 'footer.php'; ?>