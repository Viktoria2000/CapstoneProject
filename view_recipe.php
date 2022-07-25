<?php
    include "connect_client.php";
    include "header.php";
?>
<link rel="stylesheet" href="front_end.css">
<style>

#R {
    color: black;
    background-color: white;

}

body {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
    font-family: 'Neucha', cursive;
}

form {
    display: inline-block;
}

.button {
    /*Decorating the text*/
    font-family: 'Neucha', cursive;
    font-size: 17px;
    text-decoration: none;
    color: #FFFFFF;
    text-align: center;

    /*styling the button*/
    display: inline-block;
    padding: 10px 25px 10px 25px;
    margin: 0 5px 5px 0;
    border-radius: 15px;
    box-sizing: border-box;
    background-color: #11243a;

    /*controlling colour change*/
    transition: all 0.4s;
}

.button:hover {
    background-color: #b98a54;
    cursor: pointer;

}

.content {
    
    text-align: center;
    padding: 5%;
    margin-top: 1%;



}

.main {

    height: 100%;
}

.reviews {

    bottom: 0;
    float: left;


}
.gold{
    background-color: #b98a54;
}
.blue{
    background-color: #00004d;
}
.yellow{
    background-color: #1e1e00;
}
.green{
    background-color: #031703;
}

.basic_information {
    display: inline-block;
    padding: 2%;
    text-align: center;
}

.basics {
    padding: 0 6% 0 6%;
}

.right {
    display: inline;
    margin: 2% 0 10% 0;

}

.a {
    display: inline-block;
    float: left;
    width: 50%;
}

.ingredients {
    padding-top: 5%;
    padding-bottom: 5%;
}

.description p {
    width: 70%;
    float: center;
    padding-left: 15%;
}

.directions p {
    width: 60%;
    float: center;
    padding-left: 20%;

}


.list {
    line-height: 1.6;
}
.audio{
    padding: 2%;
    background-color: #eeeeee;
    border-radius: 20px;
    
}
#directions i{
    color: black;
    font-size: 13px;
}
.icon_button{
   outline: none;
   border: none;
   cursor: pointer;
   background: none;
}

@media screen and (max-width: 480px) {
    .a{
        width: 100%;
    }
    .cover_container img{
        width: 100%;
    }
}


.instructions{
  background-color: black;
  color: white;
  font-family: 'Neucha', cursive;
  letter-spacing: 1px;
  cursor: pointer;
  padding: 10px;
  width: 200px;
  border: none; 
  border-radius: 15px;
  outline: none;
  text-align: center;
  font-size: 15px;
  transition: 0.4s;
}

.instructions:hover {
  background-color: grey; 
}

.container {
  padding: 0 20px;
  display: none;
  overflow: hidden;
}
</style>

<body>
      
    <div class="main">
        <div class="all">

            <?php foreach($Display as $recipes){ 
        $ID = $recipes['ID'];
        ?>

            <div class="content">
                <div class="header_container">
                    <div class="title a">
                        <h1><?php echo $recipes['Name'];?></h1>
                        <div class="cover_container"><?php echo $recipes['CoverImage'];?></div>
                    </div>
                    <div class="right a">
                        <div class="basics">
                        <div class="basic_information">
                                <h3> Difficulty </h3>
                                <hr id="line1" class="gold">
                                <p><?php echo $recipes['Difficulty'];?></p>
                                
                            </div>
                            <div class="basic_information">
                                <h3> Allergens </h3>
                                <hr id="line2" class="gold">
                                <p><?php echo $recipes['Allergens'];?></p>
                            </div>
                            
                            <div class="basic_information">
                                <h3>Type</h3>
                                <hr id="line3" class="gold">
                                <p><?php echo $recipes['Type'];?></p>
                            </div>
                        </div>
                        <div class="description">
                            <h3> Description</h3>

                            <p ><?php echo $recipes['Description'];?></p>

                            <h3>Time: <?php echo $recipes['Total_Time'];?> Minutes</h3>
                            <h4>Prep: <?php echo $recipes['Prep_Time']." Minutes";?>  |  Cook: <?php echo $recipes['Cook_Time']." Minutes";?></h4>
                        </div>
                          <?php  if(isset($_SESSION['username'])){?>
                        <form method="POST">
                            <input type="text" hidden value='<?php echo $_SESSION['username']?>' name="name">
                            <input type="text" hidden value='<?php echo $recipes['ID']?>' name="recipe_id">
                             <input type="submit" value="Save Recipe" name="save_recipe" class="button"></input>
                             <?php echo $saved; ?>
                        </form>
                            <?php }?>
                    </div>
                </div> 


                <div class="ingredients">
                    <h3> Ingredients</h3>
                    <hr id="line4" class="gold">
                    <p class="list"><?php echo $recipes['Ingredients'];?></p>
                </div>
                <div class="audio">
                <h3 id="black" >Listen to Directions as you Cook</h3>
                <button onclick="play()" class="icon_button"><img id="audio_icon_play" style="width: 49px;" src="https://lh3.googleusercontent.com/14lmuUw6pcq0n5ER_NV53W9P6TSxoRVnBRbTGQ9zXcFAJP1bkohNUewNFJRcIOBiEiH7H-bDwfO3k537aN0gvTZAPdKZRGSYs1Sz1U40G0E_N6DwzGfkeJ_CRx1GtsplGAhXoqYddQ"></button>
                <button onclick="pause()" class="icon_button"><img id="audio_icon_pause"  style="width: 50px;" src="https://lh3.googleusercontent.com/iH6l1BPBbgZhRkLv54C_Y7F8Da96fKB1svVvBm7RrRMrNZzeFZa1c1F4KEY4MDPJtN1Bq8oXLl4QMUnh2TxZu3nRphZRGQnOjqtOoGDzvQ2meiNDtbS8cCG3-Gk5_LoMpkurpC7Z_w"></button>
                <button onclick="stop()" class="icon_button"><img id="audio_icon_stop" style="width: 42px; margin-bottom: 3px;" src="https://lh3.googleusercontent.com/5lih11BmFNLjrOHAqRCr4zVMsmsEdhUwMWgkJmvx-aFZipIDhB-79ytbJqwB55oTpJbTP28aF4gZNeuxuRpFURMpvoyFg4pOUbUxb0LNEInO333y6ajhfdApSOG4n-xASeJWtaLrZQ"></button>
                <button onclick="listen()" class="icon_button"><img id="audio_icon_record" style="width: 42px; margin-bottom: 3px;" src="https://lh3.googleusercontent.com/dQPIi271z5MGIFOrYXGbBazrMTCvXyGyb7o3sKZL-6aqRxMBrdjcA_A9gF9fCzk6eQ0u_fylaO5_nWj8v--3Bbll1sWJQV_NWSoEq80NPIc6ItefWQnc7ZE3q5pCH5-xzZ0IluVstQ"></button>
                <div>
                    <p id="black_message" class="output"><em>...diagnostic messages</em></p>
                    <button class="instructions">Microphone Options</button>
                        <div class="container">
                          <p><b>Stop recipe playing before dictating.</b><br><br>
                          Play or stop recipes by saying "<b>play</b>" or "<b>stop</b>."<br><br>
                          Switch between reading modes by saying, "<b>light mode</b>" or "<b>dark mode</b>."<br><br>
                          Stuggle to read without an overlay? Try "<b>blue overlay</b>", "<b>yellow overlay</b>" <br> or "<b>green overlay</b>."</p>
                        </div>
                    </div>

                </div>
                <script>
                    let instructions = document.getElementsByClassName("instructions");
                    
                    
                    for (let inst = 0; inst < instructions.length; inst++) {
                      instructions[inst].addEventListener("click", function() {
                        this.classList.toggle("active");
                        let container = this.nextElementSibling;
                        if (container.style.display === "block") {
                          container.style.display = "none";
                        } else {
                          container.style.display = "block";
                        }
                      });
                    }
                    </script>

                <div class="directions">
                    <h3>Directions</h3>
                    <hr id="line5" class="gold">
                    <p  id="directions"><?php echo $recipes['Directions'];?></p>
                    <br>

                </div>
                <?php } 
           foreach($NDisplay as $N){ ?>
                <div class="nutrition">
                    <h1>Nutrition </h1>
                    <hr id="line6" class="gold">
                    <div>
                        <h3> Ingredient:</h3>
                        <p><?php echo $N['Ingredient'];?></p>
                    </div>
                    <div>
                        <h3> Macro:</h3>
                        <p><?php echo $N['Macro'];?></p>
                    </div>
                    <div>
                        <h3> Micro:</h3>
                        <p><?php echo $N['Micro'];?></p>
                    </div><br>
                    <?php }?>




                    <h2>Ratings:</h2>
                    <hr id="line7" class="gold">
                    <?php
    if(isset($_SESSION['username'])){?>
                    <a class="reviewing" href="review.php?recipe=<?php echo $recipes['ID']?>">
                       <button class="button" type="button">Write a review!</button> 
                    </a>

                    <?php }
      $total = 0; 
      $one = 0;
      $two = 0;
      $three = 0;
      $four = 0;
      $five = 0;
    
      
      foreach($rating_display as $r){
        $rating = $r['stars'];
        $total = $total + $rating;
        
        switch ($rating) {
          case 1:
            $one = $one + $rating;
            break;
          case 2:
            $two = $two + $rating;
            break;
          case 3:
            $three = $three + $rating;
            break;
          case 4:
            $four = $four + $rating;
            break;
          case 5:
            $five = $five + $rating;
            break;
        }
        $average = ($one * 1 + $two * 2 + $three * 3 + $four * 4 + $five * 5 )/$total;
    ?>

                    <div>
                        <p><?php echo $r['stars'];?>★</p>
                    </div>
                    <div>
                        <h3> Comments:</h3>
                        <p><?php echo $r['comments'];?></p>
                    </div>


                    <?php }?> <p>Overall rating : <?php echo number_format($average, 1) ;?>★</p>
                </div>

            </div>
            
 <script>
var paused = false;
var play_icon = document.getElementById("audio_icon_play");
var pause_icon = document.getElementById("audio_icon_pause");
var stop_icon = document.getElementById("audio_icon_stop");

 var read = document.getElementById("directions").innerText;
 if ("onhashchange" in window) {
     speechSynthesis.cancel()
    read = document.getElementById("directions").innerText;
    play_icon.style.filter="invert(0%)";
        play_icon.style.filter="invert(0%)";
        stop_icon.style.filter="invert(0%)";
}
function different_page() {
  if (location.hash === "#url_change") {
    url_change();
  }
}
window.onhashchange = different_page;

var directions = new SpeechSynthesisUtterance(read);


    function play(){
        if(!paused){
            speechSynthesis.speak(directions);
            play_icon.style.filter="invert(50%)";
            pause_icon.style.filter="invert(0%)";
            stop_icon.style.filter="invert(0%)";
        }else{
            speechSynthesis.resume();
            play_icon.style.filter="invert(50%)";
            pause_icon.style.filter="invert(0%)";
            stop_icon.style.filter="invert(0%)";
            paused = false;
        }
    }
    function pause(){
        window.speechSynthesis.pause(); 
        pause_icon.style.filter="invert(50%)";
        play_icon.style.filter="invert(0%)";
        stop_icon.style.filter="invert(0%)";
        paused = true;

    }
    function stop(){
        play_icon.style.filter="invert(0%)";
        pause_icon.style.filter="invert(0%)";
        stop_icon.style.filter="invert(50%)";
        speechSynthesis.cancel()
    }
    
        // ----------------------------- Code has been developed and based off: --------------------------------------------//
        //          Source: https://developer.mozilla.org/en-US/docs/Web/API/Web_Speech_API/Using_the_Web_Speech_API        //
     var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList
var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent


var recognition = new SpeechRecognition();
var speechRecognitionList = new SpeechGrammarList();
recognition.grammars = speechRecognitionList;
recognition.continuous = false;
recognition.lang = 'en-US';
recognition.interimResults = false;
recognition.maxAlternatives = 1;

var diagnostic = document.querySelector('.output');
var bg = document.querySelector('html');
var hints = document.querySelector('.hints');


function listen() {
     
         recognition.start();

}
const audio_colour = document.getElementById("black");
const audio_colour_message = document.getElementById("black_message");
recognition.onresult = function(event) {
  // The SpeechRecognitionEvent results property returns a SpeechRecognitionResultList object
  // The SpeechRecognitionResultList object contains SpeechRecognitionResult objects.
  // It has a getter so it can be accessed like an array
  // The first [0] returns the SpeechRecognitionResult at the last position.
  // Each SpeechRecognitionResult object contains SpeechRecognitionAlternative objects that contain individual results.
  // These also have getters so they can be accessed like arrays.
  // The second [0] returns the SpeechRecognitionAlternative at position 0.
  // We then return the transcript property of the SpeechRecognitionAlternative object
  var command = event.results[0][0].transcript;
  diagnostic.textContent = 'Result received: ' + command + '.';
  if(command == "play"){
      play();
  }else if(command == "stop"){
      stop();
  }else if(command == "dark mode"){
      document.body.style.backgroundColor = "rgb(5,12,19)";
      document.body.style.color = "white";
      audio_colour.style.color = "black";
      audio_colour_message.style.color = "black";
  }else if(command == "light mode"){
      document.body.style.backgroundColor = "#ffffff";
      document.body.style.color = "black";
      audio_colour.style.color = "black";
      audio_colour_message.style.color = "black";
  }else if(command == "blue overlay"){
      document.body.style.backgroundColor = "#86c5da";
      document.body.style.color = "#00004d";
      audio_colour.style.color = "black";
      audio_colour_message.style.color = "black";
      document.getElementById("line1").className = "blue";
      document.getElementById("line2").className = "blue";
      document.getElementById("line3").className = "blue";
      document.getElementById("line4").className = "blue";
      document.getElementById("line5").className = "blue";
      document.getElementById("line6").className = "blue";
      document.getElementById("line7").className = "blue";
  }else if(command == "yellow overlay"){
      document.body.style.backgroundColor = "#ffffb4";
      document.body.style.color = "#1e1e00";
      audio_colour.style.color = "black";
      audio_colour_message.style.color = "black";
      document.getElementById("line1").className = "yellow";
      document.getElementById("line2").className = "yellow";
      document.getElementById("line3").className = "yellow";
      document.getElementById("line4").className = "yellow";
      document.getElementById("line5").className = "yellow";
      document.getElementById("line6").className = "yellow";
      document.getElementById("line7").className = "yellow";
  }else if(command == "green overlay"){
      document.body.style.backgroundColor = "#d2f8d2";
      document.body.style.color = "#031703";
      audio_colour.style.color = "black";
      audio_colour_message.style.color = "black";
      document.getElementById("line1").className = "green";
      document.getElementById("line2").className = "green";
      document.getElementById("line3").className = "green";
      document.getElementById("line4").className = "green";
      document.getElementById("line5").className = "green";
      document.getElementById("line6").className = "green";
      document.getElementById("line7").className = "green";
  }
  
  
    
  console.log('Confidence: ' + event.results[0][0].confidence);
}

recognition.onspeechend = function() {
  recognition.stop();
}

recognition.onnomatch = function(event) {
  diagnostic.textContent = "I didn't recognise that command.";
}

recognition.onerror = function(event) {
  diagnostic.textContent = 'Error occurred in recognition: ' + event.error;
}


 </script>

            <?php
include "footer.php";
?>

        </div>
    </div>
    </div>
</body>