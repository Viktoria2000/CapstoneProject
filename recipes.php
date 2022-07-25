<?php
include 'connect_client.php';
include 'header.php';

?>

<style>
.recipe {
    transition: transform 0.5s;
}

.recipe:hover {
    transform: scale(0.95);
}
#R {
    color:  black;
    background-color: white;

}
hr{
    background-color: #b98a54;
}
button {
    margin: 1% 0.5% 1% 0;
    padding: 0.6% 2%;
    letter-spacing: 1px;
    border-radius:20px;
    font-size: 16px;
    font-family: 'Neucha', cursive;

}
.buttons {
    display: flex;
    justify-content: center;
}

h2 {
    text-align: center;
    font-size: 30px;
    font-family: 'Neucha', cursive;
    margin: 2%;
}
h4 {
    text-align: center;
    font-size: 25px;
    font-family: 'Neucha', cursive;
    letter-spacing: 2px;
    margin: 2%;

}

.random {
    margin-top: 5%;
    padding: 2%;

}

.body {
    margin: 0% 2% 0% 0%;
    padding: 0;

}
.recipe {
    background-color: #11243a;
    font-family: 'Neucha', cursive;
    color: white;
    width: 20%;
    border-radius: 15px;
    text-align: center;
    display: flow-root;
    margin: 20px;

}
.recipe a {
    text-decoration: none;
    color: white;
}

.posts {
    max-width: 100%;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}
.container {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    width:100%;
    justify-content: center;
    margin-bottom: 3%;
}
body
 {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;

}
select {
    padding:0.6%;
    border-radius: 15px;
    text-align: center;
    font-size: 15px;
    font-family: 'Neucha', cursive;
    margin:0% 2% 0% 2%;

}
.IN {
    padding:0.6%  1.5% 0.6% 1.5%;
    border-radius: 15px;
    text-align: center;
    font-size: 15px;
    font-family: 'Neucha', cursive;
    margin:2.5% 4% 0% 2%;

}
.Search {
    padding:0.6%  15% 0.6% 15%;
    border-radius: 15px;
    text-align: center;
    font-size: 15px;
    font-family: 'Neucha', cursive;
    margin-bottom:2.5%
}
.Search.b {
    padding:0.6%  6% 0.6% 6%;
}
form {
    text-align: center;
}
@media screen and (max-width: 480px) {

  
.container {
    
    width: 100%;
    justify-content: center;
    margin-bottom: 3%;
}

.recipe {

    width: 80%;
    margin: 20px;
}


.posts {
    max-width: 100%;
}
select{
        margin: 0% 5% 3% 2%;
}
.Search {
    padding: 2% 25% 2% 25%;
    margin-bottom: 4%;
}
h2{
      margin: 5%;
}

}

</style>

<body>

<h2> Recipes </h2>
<hr>

<form method = 'POST' enctype = 'multipart/form-data'>

<br>
<input name = 'Keyword' type = 'text' class = 'Search' placeholder = 'Search...'>
<br>
<select name = 'Allergens' id = 'Allergens'>
<option value = 'None'>Allergen</option>
<option value = 'Soy'>Soy</option>
<option value = 'Peanut'>Peanut</option>
<option value = 'Tree Nut'>Tree Nut</option>
<option value = 'Sesame'>Sesame</option>
<option value = 'Gluten'>Gluten</option>
</select>
<select name = 'Type' id = 'Type'>
<option value = 'None'>Type</option>
<option value = 'Breakfast'>Breakfast</option>
<option value = 'Lunch'>Lunch</option>
<option value = 'Dinner'>Dinner</option>
<option value = 'Dessert'>Dessert</option>
<option value = 'Side'>Side</option>
<option value = 'Drink'>Drink</option>
<option value = 'Snack'>Snack</option>
</select>
<select name = 'Time' id = 'Time'>
<option value = 'None'>Time</option>
<option value = '10'>10 Minutes or less</option>
<option value = '20'>20 Minutes or less</option>
<option value = '30'>30 Minutes or less</option>
<option value = '45'>45 Minutes or less</option>
</select>
<select name = 'Sort' id = 'Sort'>
<option value = 'None'>Sort</option>
<option value = 'Quickest'>Quickest</option>
<option value = 'Slowest'>Slowest</option>
<option value = 'Newest'>Newest</option>
<option value = 'Oldest'>Oldest</option>
</select>
<br> <br>

<button name = 'Search'>Search</button>

</form>

<div class = 'container'>
<br>
<center></center>
<?php if ( isset( $_GET[ 'error' ] ) && $_GET[ 'error' ] != '' ) {
    ?>
    <p name = 'message'><?php echo $_GET[ 'error' ];
    ?> </p>
    <?php } else {
        foreach ( $Results as $recipes ) {
            ?>
            </center>
            <br>
            <div class = 'recipe'>
            <a href = "view_recipe.php?ID=<?php echo $recipes['ID']?>">
            <img class = 'posts' <?php echo $recipes[ 'CoverImage' ];?>
            <h5><?php echo $recipes[ 'Name' ];?> <br> <?php echo $recipes[ 'Total_Time' ]." Minutes";?> </h5></a>
            </div>
            <?php }
        }
        ?>
        </div>
        </div>
        </form>

</body>
<?php
include 'footer.php';
?>

