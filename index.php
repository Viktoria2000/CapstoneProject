<?php
    include "connect_client.php";
    include "header.php";
?>
<link rel="stylesheet" href="front_end.css">

<style>

.recipe {
    transition: transform 0.5s;
}

.recipe:hover {
    transform: scale(0.95);
}

#i {
    color: black;
    background-color: white;

}

body {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
}

.banner {

    background-image: linear-gradient(rgb(255, 255, 255), rgba(255, 255, 255, 0.877), rgba(223, 223, 223, 0.24)), url("https://lh3.googleusercontent.com/IW4nemuwlYK-2jAKyGixeaX5D0ycVkfC-Kl77mtsowN8qFV8FuxldP1wyyBRs1cZ2BEY4P6TH13Nt4HUsKi7nzfc_Q381AMKasBOuGe1d7sb3tAxNCs0u2zyKzbN-e7ilgpR3SwF");
    height: 60%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.bannerText {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #11243a;
    font-family: 'Neucha', cursive;

}

.bannerText h1 {
    font-size: 30px;
}


.CTA {

    background-image: linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.2), rgba(223, 223, 223, 0.22)), url("https://lh3.googleusercontent.com/2TkjR7MM1Ur23kET1_TqwrjnRPfam-cWVC0rn2o3j8JIG7mXyll1WCCIurwOopTeLC7HOSg3i-zeUGK0VZ4fdtTuB0gmfCq_16rUTLhrFA6sslLgE90K7XFKUbMFcRPzBQdt5Vm8=w2400?source=screenshot.guru");
    height: 60%;
    padding-top: 10%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;

}

.CTAText {
    text-align: center;
    position: absolute;
    margin-top: 10%;
    margin-left: 30%;
    width: 38%;
    transform: translate(-50%, -60%);
    color: #11243a;
    font-family: 'Neucha', cursive;
    background-color: rgba(255, 255, 255, 0.65);
    padding: 2% 3% 2% 0%;
    border-radius: 20px;
}

.subscribe input[type="text"] {
    border: none;
    background-color: rgba(238, 238, 238, 0.65);
    padding: 2%;
    margin: 3%;
    border-radius: 20px;
    font-family: 'Neucha', cursive;
    color: #11243a;
    width: 100%;
}

.subscribe input[type="submit"] {
    border: none;
    font-family: 'Neucha', cursive;
    padding: 2% 10% 2% 10%;
    border-radius: 20px;
    background-color: #b98a54;
    color: white;
    font-size: 15px;
}

.container {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    width: 100%;
    justify-content: center;
    margin-bottom: 3%;
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

h2 {
    text-align: center;
    font-size: 30px;
    font-family: 'Neucha', cursive;
    margin: 2%;
}

hr {
    width: 20%;
    height: 2px;
    background-color: #b98a54;
    margin-bottom: 3%;
}



.column {
    float: left;
    padding: 40px;
    height: 470px;
    background-color: #eeeeee;
    margin-bottom: 5%;

}


.left {
    width: 40%;
    padding-left: 5%;
    box-sizing: border-box;
}

.right {
    width: 60%;
    padding-right: 10%;
    box-sizing: border-box;
}

.section {
    margin-bottom: 5%;
}

.about {
    height: 330px;
    margin-left: 10%;
    margin-top: 3%;
    box-shadow: 10px 10px 2px #aaaaaa;
}

.wrapper {

    /*This part is important for centering*/
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 3%;
    margin-top: 3%;
}


p {
    text-align: center;
    font-family: 'Neucha', ursive;
    padding: 10px;
    margin: 5%;

}
.icons{
    height:80px;
 width: 80px;
 padding: 5%;

}
.icons:hover {
    opacity: 0.7;
}
.icons:onclick {
    opacity: 0.7;
}

.ic{
     display: inline-block;
     text-align: center;
    font-family: 'Neucha', ursive;
    text-decoration: none;
    color: black;
}
.is{
     display: inline-block;
     text-align: center;
    font-family: 'Neucha', ursive;
    text-decoration: underline;
    color: black;
}

.icons_containter{
    margin: 0% 20% 0% 22%;
}

/*----------------------------------------------   Phone ------------------------------------------------- */
@media screen and (max-width: 480px) {
    
    
.CTA {

    height: 70%;
    padding-top: 10%;

}

.CTAText {

    margin-top: 70%;
    margin-left: 50%;
    width: 80%;
    padding: 2% 3% 2% 0%;
    border-radius: 20px;
}

    .about {
    height: 80%;
    margin-left: 0%;
    margin-top: 1%;
    box-shadow: 0px 0px 0px;

}
    .column {
    float: left;
    padding: 20px;
    height: 500px;
    margin-bottom: 0%;

}


.left {
    width: 100%;
    padding-top: 20%;
}

.right {
    width: 100%;
    padding-right: 10%;
}
  .icons_containter{
    margin: 0% 20% 0% 32%;
}
  
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
  .icons_containter{
    margin: 0% 10% 0% 10%;
}
  
  
}




</style>

<body>

    <div class="banner">
        <div class="bannerText">
            <h1>Welcome To The Pleasy Plantling</h1>

            <p>All the best tasting vegan food hand crafted by you.</p>

        </div>
    </div>
    <div class="section">
        <h2> Filter </h2>
        <hr>
        <center>
          <div class="icons_containter">
            <a href="index.php?filter=Breakfast" id="breakfast" class="ic"><img class="icons" src="https://lh3.googleusercontent.com/Rdx4UkFJU_4zLw3BpAheRoBd1JMGuEbjMKpYH1xgWfTjM7QxfOB1ny3jld1ok2auftAbhFx0wURmjpW6DTdAIABD1dpCD1CuwWJUbSDeNGm_EL_A1lQbEnmOVROecuwGq4U2lNWUyg" alt="Breakfast"/> Breakfast</a>
            <a href="index.php?filter=Lunch" id="lunch" class="ic"><img class="icons" src="https://lh3.googleusercontent.com/kkl041B5ezpHA4AwgxZ7DO7Yn5VrDNoB2yuK3I8V5-C9g1dOPOza_9uwObMAnmgwI9V49yQpVHYAw_Xs1_-bvH9rUvdDVN0RiffGZNZN6QGKQRbw0VfDMHqFYQPzVq6TyN3dZ0xLOQ" alt="Lunch"/> Lunch</a>
            <a href="index.php?filter=Dinner" id="dinner" class="ic"><img class="icons" src="https://lh3.googleusercontent.com/ZQcJsRY8zyjxkoqTV5SPQ2JVsys6_xUlRwHl0hoZOlLY1nt-verd4INKI4wnl4Jjc_xp0czrVlYeXZlx8kHrIf2Tvy1PTWuTRjwdTNkp67LVFz-e7fpxhJTqwcPFa30uTMIT-pfN9Q" alt="Dinner"/> Dinner</a>
            <a href="index.php?filter=Snack"  id="snacks" class="ic"><img class="icons" src="https://lh3.googleusercontent.com/0ojEnd6q11JGjonuwW4xqa4ldt7wYb1_JY6FRn3GbEs1_uMmONwjvaCmXPow7SzTWl1HA_Ysu27Z8hn_cImteFCCtqaEToDRdrKD0ssYBjzt79H3v1BjRlmC8ldBHo68JQDH7KHw2Q" alt="Snacks"/> Snacks</a>
            <a href="index.php?filter=All"  id="all" class="ic"><img class="icons" src="https://lh3.googleusercontent.com/qwF3PObVu0-4TnEClryXNh8uOSwM0fuH5Nwnou4o-sQd8JWf0-W8-qGFMkMmP6tNPNjZeHHjunummS6yokEMx4G3rwofZexhRXJPyzCvcapiiT1IZqA55D3YQ0aPqGob4O5_TyxEgQ" alt="All"/>All</a>
        </div>  
        </center>
         <div class="container">
            <?php 
            $Filters = mysqli_query($connect, "SELECT * FROM Recipes");// running the query
            
            $filter = $_GET['filter'];
            if($filter == "All"){
                $Filters = mysqli_query($connect, "SELECT * FROM Recipes");// running the query
            }else{
                $Filters = mysqli_query($connect, "SELECT * FROM Recipes WHERE Type LIKE '%".$filter."%'");// running the query
            }
            
            if($filter == 'Breakfast'){?>
                <style>
                    #breakfast{
                        text-decoration: underline;
                        font-weight: bold;
                    }
                </style>
            <?php }
            if($filter == 'Lunch'){?>
                <style>
                    #lunch{
                        text-decoration: underline;
                        font-weight: bold;
                    }
                </style>
            <?php }
            
            if($filter == 'Dinner'){?>
                <style>
                    #dinner{
                        text-decoration: underline;
                        font-weight: bold;
                    }
                </style>
            <?php }
            
            if($filter == 'Snack'){?>
                <style>
                    #snacks{
                        text-decoration: underline;
                        font-weight: bold;
                    }
                </style>
            <?php }
            if($filter == 'All'){?>
                <style>
                    #all{
                        text-decoration: underline;
                        font-weight: bold;
                    }
                </style>
            <?php }
            
  
            foreach($Filters as $recipes){ ?>
            <div class="recipe">
                <a href="view_recipe.php?ID=<?php echo $recipes['ID']?>">
                    <img class="posts" <?php echo $recipes['CoverImage'];  ?> <h5><?php echo $recipes['Name'];?></h5>
                    </a>
            </div>
            <?php }?>
        </div>
        <p><a  style="text-decoration: none; color: black;" href="https://www.flaticon.com/free-icons/breakfast" title="breakfast icons">Breakfast by Freepik </a><b>|</b>
          <a style="text-decoration: none; color: black;" href="https://www.flaticon.com/free-icons/lunch" title="lunch icons">  Lunch by Freepik </a><b>|</b>
          <a style="text-decoration: none;color: black;" href="https://www.flaticon.com/free-icons/dinner" title="dinner icons">  Dinner by Freepik </a><b>|</b>
          <a style="text-decoration: none;color: black;" href="https://www.flaticon.com/free-icons/snack" title="snack icons">Snack by Freepik </a><b>|</b>
       <a style="text-decoration: none;color: black;" href="https://www.flaticon.com/free-icons/healthy-food" title="healthy food icons">All by tulpahn</a>
        </p>
    </div>
    </div>
    <div class="row">
        <div class="column left">
            <img class="about"
                src="https://lh3.googleusercontent.com/Uti1kNzWJ7N_FffKK7_ikiazfnWMPBdastB4iAiFanQ3JT0V80dR6YqipRKBuOHpGBMr0-8SCKsKNgxkMCZ6blHjJ96MaWDz0prdz37vtJmJeHhlSz5xXvQ9saxuJ15UNWvjyq_j" />

        </div>
        <div class="column right">

            <h2>Pleasing, Easy, Recipies Made From Plants.</h2>

            <hr>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum."</p>
            <button class="button"
                onclick="window.location.href='https://pleasyplantling.thedesignerduck.co.uk/sign_in.php'"
                style="margin:auto;display:block">Join the Community!</button>
        </div>
    </div>

    <div class="section">
        <h2> New </h2>
        <hr>
        <div class="container">
            
            <?php 
            $four_new = 0;
            foreach( $new_display as $recipes){ ?>
            <div class="recipe">
                <a href="view_recipe.php?ID=<?php echo $recipes['ID']?>">
                    <img class="posts" <?php echo $recipes['CoverImage'] ;?> <h5><?php echo $recipes['Name'];?></h5></a>
            </div>
            <?php 
            $four_new ++;
            if($four_new == 4){
                break;
            }
            }?>
        </div>
        <button class="button" onclick="window.location.href='https://pleasyplantling.thedesignerduck.co.uk/recipes.php'"
            style="margin:auto;display:block">View More</button>
    </div>

    </div>

    <div class="CTA">
        <div class="CTAText">
            <h2>Sick of being hungry all the time?</h2>
            <p>Learn how to create well banaced meals that crush your hunger!</p>
            <form class="subscribe" action="/sign_in.php">
                <label for="username">User Name</label><br>
                <input type="text" id="name" name="user_name"><br>
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email"><br>
                <input type="submit" value="Sign Up">
            </form>
        </div>
    </div>
    </div>

</body>
<?php
include "footer.php";
?>