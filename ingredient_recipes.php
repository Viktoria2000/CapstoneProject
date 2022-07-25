<?php
    include "connect_client.php";
    include "header.php";
    
?>

<style>
#R {
    color: black;
    background-color: white;

}

button {
    margin: 1% 0.5% 1% 0;
    padding: 0.6% 2%;
    letter-spacing: 1px;
    border-radius: 20px;
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
    width: 100%;
    justify-content: center;
    margin-bottom: 3%;
}

body {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
}

select {
    padding: 0.6%;
    border-radius: 15px;
    text-align: center;
    font-size: 15px;
    font-family: 'Neucha', cursive;
    margin: 0% 2% 0% 2%;

}

.IN {
    padding: 0.6% 1.5% 0.6% 1.5%;
    border-radius: 15px;
    text-align: center;
    font-size: 15px;
    font-family: 'Neucha', cursive;
    margin: 2.5% 4% 0% 2%;

}

.Search {
    padding: 0.6% 15% 0.6% 15%;
    border-radius: 15px;
    text-align: center;
    font-size: 15px;
    font-family: 'Neucha', cursive;
    margin-bottom: 2.5%
}

.Search.b {
    padding: 0.6% 6% 0.6% 6%;
}

form {
    text-align: center;
}
</style>

<body>

    <h2> Search with random ingredient? </h2>
    <hr>
    <div class="buttons">
        <button onclick="location.href=' https://pleasyplantling.thedesignerduck.co.uk/basic_recipes.php'">Basic
            Search</button>
        <button
            onclick="location.href=' https://pleasyplantling.thedesignerduck.co.uk/ingredient_recipes.php'">Ingredient
            Search</button>
    </div>


    <form class="random" method="POST" enctype="multipart/form-data">
        <input name="include" type="text" class="Search b" placeholder="Include">
        <input name="exlcude" type="text" class="Search b" placeholder="Exclude">
        <button name="filter">Search</button>
        <form>
            <div class="container">
                <br>
                <center></center>
                <?php if(isset($_GET['error']) && $_GET['error']!="") { ?>
                <p name="message"><?php echo $_GET['error']; ?> </p>
                <?php } 
                
          else{ foreach($Results as $recipes){ ?>
                </center>
                <br>
                <div class="recipe">
                    <a href="view_recipe.php?ID=<?php echo $recipes['ID']?>">
                        <img class="posts" <?php echo $recipes['CoverImage'];  ?> <h5><?php echo $recipes['Name'];?>
                        </h5></a>
                </div>
                <?php }}?>
            </div>
            </div>
        </form>

</body>
<?php
include "footer.php";
?>