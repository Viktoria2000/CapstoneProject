<?php

    mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<link href="https://fonts.googleapis.com/css2?family=Neucha&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<style>


h1{
    font-size: 20px;
}
.c{
    float: left;
    background-color: #11243a;
    color: white;
    padding: 2% 0% 0% 5%;
     box-sizing: none;
    
}
.footer{
    position: absolute;
   left: 0;
   bottom: auto;
   width: 100%;
   background-color: #11243a;
   font-family: 'Neucha', cursive;
   padding-bottom: 3%;
   padding-top: 3%;
   text-align: center;
}
hr{
            margin-bottom:1%; 
            outline: none;
            border: none;
            width:20%;
            height: 4px;
}
#hr{
            background-color: #b98a54;
 
        }
.column1{
    width: 28%;
}
.column1 a{
    text-decoration: none;
    font-family: 'Neucha', cursive;
    color: white;
    font-size: 20px;
    line-height: 40px;
}
.column2{
    width: 27%;
    font-family: 'Neucha', cursive;
    font-size: 20px;
    
}
.column2 p{
    line-height: 40px;
    
}

.column3{
    width: 27%;
}
.column2 .bx{
    font-size: 15px;
}
.column3 .bx{
    font-size: 50px;
}

@media screen and (max-width: 749px) {
    .column1{
        width: 100%;
        
    }
    .column2{
        width: 100%;
        
    }
    .column3{
        width: 100%;
        
    }
    .c{
       padding: 0% 0% 0% 0%;
    }
}
</style>
</head>
<body>
<div class="Container">
<div class="footer">
    <div class="c column1">
        <h1>Get To Know Us:</h1>
        <hr id="hr">
        <i class='bx bx-food-menu' ></i><a href="https://pleasyplantling.thedesignerduck.co.uk/recipes.php">  Recipes</a><br>
        <i class='bx bxs-user-detail'></i><a href="https://pleasyplantling.thedesignerduck.co.uk/sign_in.php"> Sign in</a><br>
        <i class='bx bxs-contact'></i><a href="https://pleasyplantling.thedesignerduck.co.uk/contact.phpe">  Contact</a><br>
    </div>
    <div class="c column2">
        <h1>Ingredients to our Recipes:</h1>
        <hr id="hr">
        <p><i class='bx bx-check-square' style="font-size:20px;"></i>  A Bundle of Love<br>
        <i class='bx bx-check-square' style="font-size:20px;"></i>  All the Plantlings<br>
        <i class='bx bx-check-square' style="font-size:20px;"></i>  A Whole Load of Easiness</p>
        
    </div>
    <div class=" c column3">
        <h1>Let us know what you think:</h1>
        <hr id="hr">
        <i class='bx bx-mail-send bx-tada' ></i><i class='bx bxl-facebook-square bx-tada' ></i><i class='bx bxl-instagram bx-tada' ></i>
        <p>Bringing Pleasing, Easy, Plantiful recipies to your home!</p>
    </div>

</div>

</div>
</body>
</html> 