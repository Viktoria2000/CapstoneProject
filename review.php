     <?php
      include "connect_client.php";
    include "header.php";
     ?>
             <!------------ 
Author: Allenhe
Title: 5 star rating with css and html
Location: https://codepen.io/hesguru/pen/BaybqXv 
START 
------------------->
          <style>
          textarea{
        border-radius: 20px;
        text-align:center;
    }
    .post_recipe{
         margin: 1% 0.5% 1% 0;
             padding: 0.6% 5%;
             letter-spacing: 1px;
             border-radius:20px;
             font-size: 16px;
            font-family: 'Neucha', cursive;
            
    }body{
          
            margin: 0px;
            padding: 0px;
            overflow-x: hidden; 
            font-family: 'Neucha', cursive;
    }
           .rate {
           
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            width:1em;
            float: right;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★';
        }
        .rate > input:checked ~ label {
            color: #ffc700;    
        }
        #middle{
            width:180px;

        }
        .bx{
            color:black;
        }
        img{
            margin-left: auto;
             margin-right: auto; 
             display: block;
        }
        @media screen and (max-width: 480px) {
            img{
                width:100%;
            }
            .rate {
                margin-left:20%;
                margin-right:20%;
            }
            #middle{
            width:300px;
                
            }
            h1{
                font-size: 25px;
            }
           
            
        }
       
          </style>
 <!------------ 
        Author: Allenhe
        Title: 5 star rating with css and html
        Location: https://codepen.io/hesguru/pen/BaybqXv 
        END
 ------------------->
<body> 
<?php
    

    if(isset($_SESSION['username'])){
    $recipe_id = $_GET['recipe'];
    $details = mysqli_query($connect, "SELECT * FROM Recipes WHERE ID = '$recipe_id'");
    
    foreach($details as $detail){ ?>
        <h1 style="text-align: center;"><?php echo $detail['Name'];?></h1>
        <?php echo $detail['CoverImage'];
    }
   ?>


<center>
        <form method="POST">
             <h2 class="h2a">What did you think?</h2>
             <input type="text" hidden value='<?php echo $_SESSION['username']?>' name="name">
             <!------------ 
Author: Allenhe
Title: 5 star rating with css and html
Location: https://codepen.io/hesguru/pen/BaybqXv 
START 
------------------->
<div id="middle">
        <div class="rate">
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text"></label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text"></label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text"></label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text"></label>
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text"></label>
          </div><br>
</div>
 <!------------ 
        Author: Allenhe
        Title: 5 star rating with css and html
        Location: https://codepen.io/hesguru/pen/BaybqXv 
        END
 ------------------->   
      <h2 class="h2b">Comment:</h2>

      <textarea rows="10" cols="50" name="comment"> </textarea><br>
      <input type="submit" value="Post" class="post_recipe" name="post_review"></input>
   <?php } ?>      
</form>
</center>
</body>

 