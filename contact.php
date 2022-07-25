<?php
    include "header.php";
?>


        <style>
    #C{
            color:  black;
            background-color: white;
            
          }
            </style>
        <title>Contact Us</title>
        <link rel="icon" type="image/png" href="images/Favicon.png">
        <style>
          body
            {
                width: auto;
                height: auto;
                margin: 0px;
                padding: 0px;
                overflow-x: hidden;
                font-family: 'Neucha', cursive;
                 background-image: linear-gradient(to right, rgba(255,255,255, 0.7) 0 100%), url("https://lh3.googleusercontent.com/k_9QmN9wJyWK_MnRxxEUd5_kfGIX8Oxaxe-eyAQkErzbGd1zXUufzvlg-RrYlq0-rPrbFtbdSHxJe6HyAlLTkKI64fdU9rECczSc74Kkf-ajMJ9th4A5id_ct8oqC7fn85JZo-CBOA");
                background-repeat: no-repeat;
                background-size: cover;
                
                
                
            }
            .FormContainer{
                width:50%;
                text-align: center;
                padding: 35px;
                margin: 10% auto;
                border-radius: 20px;
                background-color: #11243a;
                color: white;
                font-size: 20px;
            }
            input{
                border-radius: 15px;
                padding: 1% 5% 1% 5%;
                font-family: 'Neucha', cursive;
                font-size: 20px;
                
            }
            textarea {
                width: 72%;
                height: 20%;
                border-radius: 15px;
                margin:3%;
                padding: 2%;
                 resize: none;
            }
            input[type="submit"]{
                padding: 1% 10% 1% 10%;
                color: white;
                background-color: #b98a54;
                border :none;
                font-size: 18px;

            }
             hr{
                width:20%;
                height: 2px;
                background-color: #b98a54;
                margin-bottom:4%; 
            }
           
        @media screen and (max-width: 480px) {
                textarea{
                    width: 93%;
                    margin: 5%;
                }
                input[type="submit"]{
                     padding: 1% 35% 1% 35%;
                }
                .FormContainer{
                    width: 70%;
                }
                input{
                    margin: 2%;
                     padding: 2% 15% 2% 15%;
                     font-size: 18px;
                }

            }
            
            
        </style>

    <body>
        <div class="FormContainer">
            <form id="Query">
                <h2> Send Us Message!</h2>
                <hr>
                <input placeholder="name" type="text" name="Name">
                <input placeholder="email" type="text" name="Email"><br>
                <textarea name="Comment" form="Query"></textarea><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
    <?php
include "footer.php";
?>

