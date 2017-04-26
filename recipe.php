<?php require 'header.php'; ?>
<?php require 'header-main.php'; ?>
<?php require 'backend/selectRecipes.php'; ?>
<?php
	$recipe = mysql_fetch_array($result);
?>
<div class="top-alt">
	<h1><?php echo $recipe["name"]; ?></h1>
</div>

<div class="content">
	<div class="container">
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div class="recipe">
				<p class="author">By <?php echo getUsernameById($recipe["username"]); ?></p>
				<p class="date">Shared on <?php echo $recipe["datecreation"]; ?></p><br><br>
				<p class="desc"><?php echo $recipe["description"]; ?></p>
				
				<h3>Preparation Method</h3>
				<?php echo $recipe["preparationmethod"]; ?>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="sidebar">
				<img src="<?php echo ($recipe["image"] ? $recipe["image"] : "backend/uploads/default.png"); ?>">

				<div class="additional">
					<h3>Additional Info</h3>

					<?php if ($recipe["suitableforvegetarians"]) {?>
					<div class="veg">
						<img src="img/icons/veg.png">
						<p>Suitable for vegetarians</p>
					</div>
					<?php } ?>
					<?php if ($recipe["spicy"]) {?>
						<div class="veg">
							<img src="img/icons/spicy.png">
							<p>Spicy</p>
						</div>
					<?php } ?>
					<div class="skill">
						<img src="img/icons/skill.png">
						<p><?php echo $recipe["skillrequired"]; ?>/10<span> Cooking skill required</span>
					</div>
					<div class="time">
						<img src="img/icons/time.png">
						<p><?php echo $recipe["cookingtime"]; ?> mins <span>Cooking time</span></p>
					</div>
					<p class="serve">Serves <span><?php echo $recipe["servers"]; ?></span></p>
				</div>

				<div class="ingredients">
					<h3>Ingredients</h3>
					<?php echo $recipe["ingredients"]; ?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require 'footer.php'; ?>