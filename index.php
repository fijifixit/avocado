<?php require 'header.php'; ?>

<div class="top">

	<header class="container">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
			<a href="index.php"><img src="img/logo.png" alt="Avocado Logo" title="Avocado"></a>
		</div>

		<div class="col-lg-offset-7 col-lg-3 col-md-offset-7 col-md-3 col-sm-offset-7 col-sm-3 col-xs-8">
			<?php
			$href = "authentication.php";
			if ($_SESSION["username"]) {
				$href = "backend/manager/viewInsertRecipe.php";
			}
			?>
			<a href="<?php echo $href; ?>" class="add-own">add your own</a>
		</div>
	</header>

	<div class="container">
		<p class="title">Enter any ingredient to find a new exciting recipe</p>

		<form action="listing.php" method="get">
			<input type="textbox" placeholder="Type In an Ingredient" class="searchbox" name="ingredient">
			<input type="submit" value="submit" class="submit">
		</form>
	</div>
</div>



<div class="container">
	<div class="discover col-lg-6 col-md-6 col-sm-6">
		<h2>Discover<br><span>amazing new recipes</span></h2>
		<p>Avocado is a new unique website designed to make it easier to search for recipes by ingredients. Add your own recipe to our growing database of amazing home recipes. Learn to cook dishes filled with amazing food which have been cooked with love.</p>
	</div>
	<div class="quote col-lg-6 col-md-6 col-sm-6">
		<p>There is no sincerer love<br>
			than the love of food.<br>
			<span>
				George Bernard Shaw
			</span>
		</p>
	</div>
</div>
<?php require 'footer.php'; ?>
