<?php
include 'connect_client.php';
include 'header.php';
?>
<link rel="stylesheet" href="front_end.css">
<style>
#b {
    color:  black;
    background-color: white;

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
}


</style>

<body>

<h2><?php echo $_SESSION['username']?>'s Bookmarks </h2>
<hr>
<div class = 'container'>
<center></center>
<?php if(isset($_SESSION['username'])){
    $name = $_SESSION['username'];
   
    $id_check = mysqli_query($connect, "SELECT id FROM Users WHERE name = '$name'");
            $id = 0;
                        
            if (mysqli_num_rows($id_check) > 0) {
              while($user = mysqli_fetch_assoc($id_check)) {
                  $id = $user["id"];
              }
            } 
            $query = "SELECT Recipes.ID, Recipes.CoverImage, Recipes.Name
                         FROM Recipes
                         INNER JOIN 
                         (SELECT * FROM Bookmarks WHERE user_id ='$id') as
                         Bookmarks ON Recipes.ID = Bookmarks.recipe_id;";
                         
            $bookmarks = mysqli_query($connect, $query);
             if (mysqli_num_rows($bookmarks) == 0) {
                 ?>
            <h4>No Bookmarks Yet!</h4>
            <br>
            <button class="button" onclick="window.location.href='https://pleasyplantling.thedesignerduck.co.uk/recipes.php'"
           >View Recipes</button>
            <?php
             }

    
        foreach ( $bookmarks  as $b) {
            ?>
            </center>
            <br>
            <div class = 'recipe'>
            <a href = "view_recipe.php?ID=<?php echo $b['ID']?>">
            <img class = 'posts' <?php echo $b[ 'CoverImage' ];
            ?>
            <h5 ><?php echo $b[ 'Name' ];
            ?></h5></a>
            <form Method="POST">
                <input type="text" hidden value='<?php echo $id?>' name="id">
                <input type="text" hidden value='<?php echo $b['ID']?>' name="recipe_id">
                 <input style="background-color:white;color:black;" type="submit" name="unsave" value="Unsave" class="button" ></input>
            </form>
            </div>
            <?php }
            }
            
            if(!empty($_POST['unsave'])){
                $recipe_id = $_POST['recipe_id'];
                $user_id = $_POST['id'];
                
                $Unsave = mysqli_query($connect, "DELETE FROM Bookmarks WHERE user_id ='$user_id' AND recipe_id ='$recipe_id'");
               header("Location: https://pleasyplantling.thedesignerduck.co.uk");
            }
        ?>
        </div>
        </div>
        </form>

</body>
<?php
include 'footer.php';
?>

