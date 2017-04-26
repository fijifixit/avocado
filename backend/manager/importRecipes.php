<?php
require __DIR__."/../config.php";

$description1 = "Grease a 20cm/8in square, deep-sided tin with butter.,Suspend a large heatproof bowl over a pan of simmering water (do not allow the base of the bowl to touch the water).,Add the Mars bars and butter to the bowl and stir until melted, smooth and well combined. The mixture will curdle at first, but keep stirring (or use a whisk) and it will eventually become smooth.,Remove the bowl from the heat, add the Rice Krispies and fold until coated in the chocolate mixture.,Spoon the mixture into the prepared tin and press down to form an even layer, pushing the mixture into the corners and sides of the tin. Set aside to cool.,Meanwhile, suspend another heatproof bowl over the pan of simmering water (do not allow the base of the bowl to touch the water). Melt the chocolate in the bowl, then drizzle or spread it over the cooled chocolate crispy cake. Set aside to cool and harden.,Chill the chocolate crispy cake in the fridge until set, preferably overnight. Cut into squares while still in the tin, then remove from the tin, pile onto a plate and serve.";
$ingredients1 = "5 Mars bars, chopped 150g/5oz butter, chopped, plus extra for greasing 100g/3½oz Rice Krispies, or other puffed rice cereal 75g/3oz plain chocolate";
$array = preg_split("/\./", $description1);
?>
<p>-------------------------------------------------------------------------------------------------</p>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i])); ?>.</li>
    <?php } ?>
</ul>
<p>-------------------------------------------------------------------------------------------------</p>
<?php
$array = preg_split("/,/", $ingredients1);
?>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i]));; ?></li>
    <?php } ?>
</ul>
<?php
$description2 = "Line two large baking trays with baking paper.,Sieve the sugar into a bowl and reserve the lavender (this stops the lavender seeds getting broken when creaming the butter and sugar). Add the butter and cream the sugar and butter together.,Sift the flour and ground rice into the mixture, add the reserved lavender seeds and mix with a wooden spoon until the mixture resembles breadcrumbs.,Using floured hands, work the mixture together to form a smooth paste.,Tip onto a lightly floured work surface and knead gently until the dough is smooth. Chill the dough in the fridge for 15 minutes.,Roll the dough out to a 5mm/¼in thickness, and cut out biscuits using a heart-shaped cutter. Place the hearts onto the baking trays, and sprinkle with a little extra lavender sugar.,Leave to chill for a further 30 minutes in the fridge.,Meanwhile, preheat the oven to 180C/ 350F/Gas 4.,Bake for 15-20 minutes, or until pale golden-brown. Carefully place the biscuits onto a cooling rack., sprinkle with extra lavender sugar and set aside to cool completely.";
$ingredients2 = "125g/4½oz lavender caster sugar, plus extra for sprinkling (see Top recipe tip below) 225g/8oz unsalted butter, softened 300g/10½oz plain flour, plus extra for dusting 50g/1¾oz ground rice";
$array = preg_split("/\./", $description2);
?>
<p>-------------------------------------------------------------------------------------------------</p>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i])); ?>.</li>
    <?php } ?>
</ul>
<p>-------------------------------------------------------------------------------------------------</p>
<?php
$array = preg_split("/,/", $ingredients2);
?>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i]));; ?></li>
    <?php } ?>
</ul>
<?php
$description3 = "For the panna cotta, put the gelatine in a bowl of cold water and leave to soak for five minutes.,Place the double cream, milk, sugar and vanilla seeds into a small pan and heat though gently, just enough for the sugar to dissolve, stirring from time to time.,Meanwhile, put the yoghurt in a large jug, stirring to loosen it up and set aside. Remove the creamy mixture from the heat once ready.,The gelatine should be soft by now, so lift it out of the water and squeeze the excess water out. Drop the gelatine into the creamy mixture and stir until dissolved. Leave to cool to body temperature for about 10-15 minutes.,Meanwhile, prepare your glasses. You will need 6 x 200ml/7fl oz pretty glasses for serving, but as the layers are set at a slant, the glasses will need to be propped to one side. Depending on the shape or type of glass, you may find egg cartons or even crumpled tea towels perfect to help prop the glasses. They could also tilt perfectly sitting in individual ramekins. Whatever you use, set them on a large tray or trays that will easily fit in the fridge.,Once cool, pour the creamy mixture over the yoghurt and then gently whisk everything together.,Carefully pour the mixture into the six glasses, dividing it evenly, without allowing any to spill out. Carefully place the tray in the fridge and leave to set for 1-2 hours, or until nice and firm. To start the setting process off quickly, you can always put them in the freezer for 20 minutes or so before popping them in the fridge to finish setting.,Meanwhile, for the jelly layer, place the raspberry jelly into a measuring jug. Pour over 200ml/7fl oz of just-boiled water and stir until the jelly dissolves. Stir in the pomegranate juice, then leave the liquid to cool to room temperature - make sure it is really cool so as to not melt the panna cotta on impact.,Remove the set panna cottas from the fridge and stand the glasses upright, removing any props. Pour the cool jelly over each one, dividing it evenly. Return the glasses back to the fridge for about two hours, or until the jelly is set firm.,When you are ready to serve, top each panna cotta with pomegranate seeds and sit on a serving plate with a small spoon. These will keep for a few days in the fridge.";
$ingredients3 = "3 gelatine leaves,100ml/3½fl oz double cream,100ml/3½fl oz full-fat milk,100g/3½oz caster sugar,1 vanilla pod, seeds only,300g/10½oz Greek yoghurt,135g/4¾oz pack raspberry jelly, cut into cubes,300ml/10fl oz pomegranate juice,½ pomegranate, seeds only";
$array = preg_split("/\./", $description3);
?>
<p>-------------------------------------------------------------------------------------------------</p>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i])); ?>.</li>
    <?php } ?>
</ul>
<p>-------------------------------------------------------------------------------------------------</p>
<?php
$array = preg_split("/,/", $ingredients3);
?>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i]));; ?></li>
    <?php } ?>
</ul>
<?php
$description4 = "Heat the cream in a small pan, removing it from the heat just before it comes to the boil.,Meanwhile, put the milk chocolate and dark chocolate in a large bowl and, once the cream comes off the heat, pour it over the chocolate. Stir well until melted and smooth.,Add the butter and enough rum to taste and mix well. Leave to cool and then cover the chocolate mixture with cling film and transfer to the fridge for at least four hours, or overnight – the chocolate will be set firm.,Line a large tray with parchment paper. Sift half of the cocoa powder onto each of two large plates. One will be to dust your hands and the other to coat the truffles.,Use a teaspoon or melon baller to scoop up walnut-sized pieces (about 15g/½oz) of the chocolate mixture. Press the palms of your hands into one of the cocoa powder plates to lightly coat and roll the truffle pieces quickly into a ball. Don’t roll the chocolate in your hands for too long or it will begin to melt.,Roll the truffle around in the cocoa powder on the other plate to lightly coat and place on the tray. Repeat until all of the mixture is used up to give about 40 truffles in total, pressing your hands into more cocoa powder when necessary to avoid sticking. It is best to wash your hands a few times throughout the process, but be sure to rinse them in cold water before drying so that they are nice and cold to avoid melting the truffles.,Cover and chill in the fridge for at least 30 minutes before serving.";
$ingredients4 = "250ml/9fl oz whipping cream 100g/3½oz milk chocolate, finely chopped 200g/7oz dark chocolate, finely chopped 25g/1oz unsalted butter, diced 2-3 tbsp dark rum 5 tbsp cocoa powder, for dusting";
$array = preg_split("/\./", $description4);
?>
<p>-------------------------------------------------------------------------------------------------</p>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i])); ?>.</li>
    <?php } ?>
</ul>
<p>-------------------------------------------------------------------------------------------------</p>
<?php
$array = preg_split("/,/", $ingredients4);
?>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i]));; ?></li>
    <?php } ?>
</ul>
<?php
$description5 = "Preheat the oven to 200C/400F/Gas 6 (fan 180C). Spray two 12-hole shallow cupcake trays with oil and set aside. You can work in two separate batches if you only have one tray.,Put the tortillas in a stack on top of one another on a chopping board and cut them into quarters to give 24 pieces. Push one quarter into each hole of the cupcake trays, pressing it in to fit. Really press it down to form a sturdy bottom and the tops should splay out at the top creating a ‘cup’. Cook in the oven for about five minutes, or until the cups are crisp and brown - keep an eye on them as they can burn really quickly.,For the filling, mix the red pepper, avocado, mango, kidney beans, spring onions, chilli, lime juice and mint together in a large bowl and season to taste with salt and pepper. Add a little oil if you like.,Once the tortilla cups are crisp and golden-brown, remove them from the oven and onto a serving plate. Divide the filling mixture evenly between the cups and serve.";
$ingredients5 = "spray oil,6 white, whole-meal or seeded soft flour tortillas (19cm/7½in diameter),1 red pepper, seeds removed, cut into 1cm/½in dice,1 ripe but firm avocado, peeled, stoned and cut into 1cm/½in dice,1 small ripe mango, peeled, stone removed, cut into 1cm/½in dice or 125g/4½oz ready-prepared mango pieces, cut into 1cm/½in dice,200g/7oz canned red kidney beans, drained and rinsed,2 spring onions, trimmed and finely sliced,1 red chilli, seeds removed (if preferred), finely chopped,1 lime, juice only,½ bunch fresh mint, leaves only, finely chopped (to give about 2 tbsp),flaked sea salt and freshly ground black pepper,1 tbsp extra virgin olive oil (optional)";
$array = preg_split("/\./", $description5);
?>
<p>-------------------------------------------------------------------------------------------------</p>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i])); ?>.</li>
    <?php } ?>
</ul>
<p>-------------------------------------------------------------------------------------------------</p>
<?php
$array = preg_split("/,/", $ingredients5);
?>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i]));; ?></li>
    <?php } ?>
</ul>
<?php
$description6 = "For the chilli roti bread, put the flour(s), baking powder, chilli flakes, black pepper and salt in a large bowl. Toss together and make a well in the centre. Pour in 125ml/4fl oz cold water and mix everything together to give a nice soft dough. Knead the dough for 10 minutes by hand or five minutes in a stand mixer fitted with a dough hook and then leave it in a warm place for about 20 minutes.,Preheat the oven to 110C/225F/Gas ¼ (fan 80C). Put two large frying pans on the hob over a low to medium heat.,Divide the roti dough into four equal pieces and shape each one into a ball. Roll one out on a lightly floured work surface until it is as thin as you can get it to give about an 18cm/7in diameter circle. Dust the top with a little more flour. Drizzle one teaspoon of oil into one pan and pop the dough disc in, leaving it to cook for about two minutes on each side.,Meanwhile, quickly roll out the second piece of dough in the same way. Drizzle another teaspoon of oil into the second pan and cook this roti in the same way.,Once cooked, fold the roti in half, place on a small baking tray and put in the oven to keep warm. Repeat until all the roti breads are cooked.,For the prawn, sweet potato and lime curry, put a large pan over a medium heat and toast the coconut for 2-3 minutes, tossing regularly until it turns golden-brown. Tip into a bowl and set aside.,Return the pan to a medium heat, add the curry powder and cook for about two minutes or so, tossing regularly, until aromatic. Add the sweet potato, ginger and chilli and stir well.,Add the coconut milk and stock and cook stirring for a couple of minutes until it comes to the boil. Turn down the heat and simmer for about 6-8 minutes, or until the sweet potato is almost tender.,Add the sugar snaps and baby corn and cook for 4-6 minutes, or until tender, stirring occasionally. Mix in the prawns and cook for two minutes, or until they turn from grey to pink. Remove from the heat, throw in the spring onions, squeeze in the lime juice and season to taste.,Spoon into serving bowls, scatter the coconut over and serve with the warm roti breads.";
$ingredients6 = "200g/7oz plain flour (or a mixture of 50g/1¾oz wholemeal flour and 150g/5½oz plain flour), plus extra for dusting,4 tsp baking powder,1-2 tsp dried chilli flakes, to taste,1 tsp cracked black pepper,1 tsp fine sea salt,4 tsp sunflower oil,2 tsp desiccated coconut,2 tbsp medium or hot curry powder,2 sweet potatoes, peeled and cut into 1cm/½in cubes,4cm/1½in piece fresh root ginger, peeled, cut into long thin strips,1/5 Scotch bonnet chilli or 1 red chilli, seeds removed (optional), finely chopped,1 x 400g/14oz can coconut milk,250ml/9fl oz vegetable stock,75g/2½oz sugar snap peas,75g/2½oz baby corn, halved lengthways,225g/8oz raw, peeled jumbo king prawns (defrosted if frozen),1 bunch spring onions, trimmed and sliced,1 lime, juice only";
$array = preg_split("/\./", $description6);
?>
<p>-------------------------------------------------------------------------------------------------</p>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i])); ?>.</li>
    <?php } ?>
</ul>
<p>-------------------------------------------------------------------------------------------------</p>
<?php
$array = preg_split("/,/", $ingredients6);
?>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i]));; ?></li>
    <?php } ?>
</ul>
<?php
$description7 = "";
$ingredients7 = "";
$array = preg_split("/\./", $description7);
?>
<p>-------------------------------------------------------------------------------------------------</p>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i])); ?>.</li>
    <?php } ?>
</ul>
<p>-------------------------------------------------------------------------------------------------</p>
<?php
$array = preg_split("/,/", $ingredients7);
?>
<ul>
    <?php for ($i = 0; $i < sizeof($array); $i++) { ?>
        <li><?php echo str_replace("'", "''", htmlspecialchars($array[$i]));; ?></li>
    <?php } ?>
</ul>