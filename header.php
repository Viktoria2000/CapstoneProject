<?php
    include "connect_client.php";
    session_start();
    if (isset($_SESSION['username'] ) &&  $_SESSION['signed_in'] == true) {
        $name = $_SESSION['username'];
    }
  
?>

<html>

<head>
    <!--- Font Import -->
    <link href="https://fonts.googleapis.com/css2?family=Neucha&family=Open+Sans:wght@300;400;600&display=swap"
        rel="stylesheet">
        <meta content="width=device-width, initial-scale=1" name="viewport" />

    <style>
    .menu .name {
        font-family: 'Neucha', cursive;
        padding: 0px;
        margin: 0px;
        float: left;
        padding: 0.9% 2% 0.9% 2%;
        font-size: 25px;
        color: white;
    }

    body {
        margin: 0;
    }

    .menu {
        background-color: #11243a;
        overflow: hidden;
        padding-right: 15%;

        width: 100%;

    }

    .menu a {
        float: right;
        color: white;
        text-align: center;
        padding: 1% 2.5% 1.4% 2.5%;
        text-decoration: none;
        font-size: 20px;
        font-family: 'Neucha', cursive;
        border-radius: 20px 20px 0px 0px;

    }


    .menu a:hover {
        background-color: #b98a54;
        color: white;
        text-decoration: underline;

    }

    #user {
        text-decoration: none;
        background-color: #11243a;
        cursor: default;

    }


    i {
        color: white;
        font-size: 20px;

    }
    @media screen and (max-width: 749px) {
        .name{
             text-align: left;
        }
        .menu{
            display:none;
            
        }
        .mobile_menu {
            font-family: 'Neucha', cursive;
          background-color: #11243a;
          padding: 1%;
        }
        .mobile_menu p {
            color: white;
            font-size: 20px;
            margin: 1%;
        }
        .dropbtn {
          background-color: #11243a;
          color: white;
          
          margin-bottom: 10px;
          padding: 10px 55px 5px 10px;
          font-size: 20px;
          border: none;
          font-family: 'Neucha', cursive;
        }
        
        .dropbtn:focus {
         text-decoration: underline;
        }
        
        .dropdown {
          position: relative;
          display: inline-block;
          float:right;
          margin-top: -10%;

        }
        
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          overflow: auto;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        .dropdown-content a {
          color: black;
          padding: 12px 20px;
          text-decoration: none;
          display: block;
        }
        
        .dropdown a:hover {background-color: #ddd;}
        
        .show {display: block;}
        #user{
            display:none;
        }
        
    }
    @media screen and (min-width: 750px) {
        .mobile_menu {
            display:none;
        }

    }


</style>


    <link rel="icon" type="image/png" href="images/Favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Neucha&family=Open+Sans:wght@300;400;600&display=swap"
        rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JJLSF37PQX"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-JJLSF37PQX');
    </script>
    <!-- Hotjar Tracking Code for https://pleasyplantling.thedesignerduck.co.uk/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2904953,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</head>
<div class="menu">
    <p class="name">The Pleasy Plantling</p>

    <?php
            if(!isset($_SESSION['username'])){
                 ?><a id="s" href="/sign_in.php"> Account </a><?php
            }else{
                ?>
                <a id="s" href="/logout.php"> Sign Out </a>
                <a id="b" href="/user_bookmarks.php">Bookmarks</a>
                <?php
            }
           
        ?>

    <a id="c" href="/contact.php">Contact</a>
    <a id="r" href="/recipes.php">Recipes</a>
    <a id="i" href="https://pleasyplantling.thedesignerduck.co.uk">Home</a>
    <?php
            if(isset($_SESSION['username'])){
                ?>
                <a id="user"><?php echo "Welcome, ".$name ?></a>
                <?php
            }
        ?>
    

</div>
<div class="mobile_menu">
       <p class="name">The Pleasy Plantling</p>
       <?php
            if(isset($_SESSION['username'])){
                ?>
                <a id="user"><?php echo "Welcome, ".$name ?></a>
                <?php
            }
        ?>
    <div class="dropdown">
  <button onclick="myFunction()"  class="dropbtn">Menu</button>
  <div id="myDropdown" class="dropdown-content">
      
      <a  href="https://pleasyplantling.thedesignerduck.co.uk">Home</a>
      <a  href="/recipes.php">Recipes</a>
        <a href="/contact.php">Contact</a>
        <?php
            if(!isset($_SESSION['username'])){
                 ?><a  href="/sign_in.php"> Sign In </a><?php
            }else{
                ?>
                <a href="/logout.php"> Sign Out </a>
                <a  href="/user_bookmarks.php">Bookmarks</a>
                <?php
            }
           
        ?>
    
    
  </div>
</div>
</div>



<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>