<?php require 'header.php'; ?>
<?php require 'header-main.php'; ?>
<?php require 'backend/userLogin.php'; ?>
<div class="top-alt">
    <h1>Add Recipe</h1>
</div>
<div class="container addrecipe">
    <form action="backend/insertRecipe.php" method="post" enctype="multipart/form-data">
        <section>
            <label for="username">Username:</label><br/>
            <input type="text" name="username" value="<?php echo getUsernameFromCookie() ?>" readonly/>
        </section>
        <section>
            <label>Name (Recipe Title):</label><br/>
            <input type="text" name="name"/>
        </section>
        <section>
            <label>Skill required:</label><br/>
            <select name="skillrequired">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </section>
        <section>
            <label>Is suitable for vegetarians:</label>
            <input type="checkbox" name="suitableforvegetarians"/>
        </section>
        <section>
            <label>Is spicy:</label>
            <input type="checkbox" name="spicy"/>
        </section>
        <section>
            <label>Minimum cooking time (minutes):</label><br/>
            <select id="cookingtime-minimum" name="cookingtime_minimum">
                <option>-</option>
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="60">60</option>
                <option value="85">85</option>
                <option value="100">100</option>
                <option value="115">115</option>
                <option value="130">130</option>
                <option value="145">145</option>
                <option value="200">200</option>
                <option value="215">215</option>
                <option value="230">230</option>
                <option value="245">245</option>
                <option value="300">300</option>
            </select>
        </section>
        <section>
            <label>Maximum cooking time (minutes):</label><br/>
            <select id="cookingtime-maximum" name="cookingtime_maximum">
                <option>-</option>
            </select>
        </section>
        <section>
            <label>Servers:</label><br/>
            <select name="servers">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="6">7</option>
                <option value="6">8</option>
                <option value="6">9</option>
                <option value="6">10</option>
                <option value="6">10+</option>
            </select>
        </section>
        <section class="big_content">
            <label>Description:</label><br/>
            <textarea rows="4" cols="50" name="description"></textarea>
        </section>
        <section class="big_content">
            <label>Preparation method:</label><br/>
            <textarea rows="4" cols="50" name="preparationmethod"></textarea>
        </section>
        <section class="big_content">
            <label>Ingredients:</label><br/>
            <textarea rows="4" cols="50" name="ingredients"></textarea>
        </section>

        <section>
            <label>Image recipe:</label>
            <input type="file" name="image">
        </section>

        <input type="submit" value="Submit" id="submit"/>
    </form>
</div>
<?php require 'footer.php'; ?>
<script type="text/javascript">
    var callback = function () {
        var maximumCookingDOM = $("#cookingtime-maximum");
        var selectedValue = $(this).val();
        var numberOfOptions = 13;

        maximumCookingDOM.empty();

        if (selectedValue == "-" || !selectedValue) {
            maximumCookingDOM
                .append($("<option></option>")
                    .text("-"));
        } else {
            var temp = Number(selectedValue);
            for (var i = 0; i < numberOfOptions + 1; i++) {
                temp += 15;
                maximumCookingDOM
                    .append($("<option></option>")
                        .attr("value", temp)
                        .text(temp));
            }
        }
    };

    $("#cookingtime-minimum").change(callback);
</script>