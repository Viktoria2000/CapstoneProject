<?php
    include "connect_client.php";
    include "header.php";
    
?>
	    <style>
    #s{
            color:  black;
            background-color: white;
            
          }
            </style>
		<meta charset="utf-8">
		<title>Sign</title>
        <!--- Font Import -->
        <link href="https://fonts.googleapis.com/css2?family=Neucha&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
		<!-- Boxonics -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <style>
            body{
                width: 100%;
                height: 100%;
                margin: 0px 0px 0px 0px;
                padding: 0px;
                overflow-x: hidden;
                background-image: linear-gradient(rgba(255, 255, 255, 1),rgba(255, 255, 255, 0.2), rgba(223, 223, 223, 0.22)), url("https://lh3.googleusercontent.com/2TkjR7MM1Ur23kET1_TqwrjnRPfam-cWVC0rn2o3j8JIG7mXyll1WCCIurwOopTeLC7HOSg3i-zeUGK0VZ4fdtTuB0gmfCq_16rUTLhrFA6sslLgE90K7XFKUbMFcRPzBQdt5Vm8=w2400?source=screenshot.guru");
                 
            }
            @media screen and (min-width: 770px) {
            .Container{
                 display: flex;
                 justify-content: center;
            }
            }
            .SignUp{
                background-color: rgb(17,36,58, 0.85);
                width: 40%;
                text-align: center;
                padding: 35px;
                margin: 7%;
                border-radius: 10px;
            }
            .SignIn{
                background-color: rgb(17,36,58, 0.85);
                width: 40%;
                text-align: center;
                padding: 80px 50px 50px 50px;
                margin: 7%;
                border-radius: 10px;
            }
            .bx{
                font-size: 30px;
                color: white;
            
            }
            input{
                padding: 8px;
                margin-bottom: 2%;
                border-radius: 10px;
                width: 70%;
                font-family: 'Neucha', cursive;
                font-size: 17px;
                text-align: center;
                letter-spacing: 1px;
            }
            h1{
                font-family: 'Neucha', cursive;
                padding: 1%;
                color: white;
                letter-spacing: 2px;
            }
            hr.divider{
                border-top: 3px solid #b98a54;
                margin-bottom: 30px;
                max-width: 30%;
            }   
            .Submit{
                background-color: #b98a54;
                color: #11243a;
            }
            
            @media screen and (max-width: 480px) {
                .SignUp{
                    width: 80%;
                    padding: 2%;
                }
                .SignIn{
                    width: 80%;
                    padding: 2%;
                }
                .Container{
                 padding: 5% 0 5% 0;
            }
            body{
                background-image: none;
            }
                
            }
            
        </style>
	</head>
	<body>
	    <?php 
	    $ex_user_name = '';
	    $ex_email = '';
	    if(isset($_REQUEST['user_name'])){
	        $ex_user_name = $_REQUEST['user_name'];
	    }
	    if(isset($_REQUEST['email'])){
	        $ex_email = $_REQUEST['email'];
	    }
	    
	    if(isset($_REQUEST['sign_up'])){
	        
	        $success = $_REQUEST['sign_up'];
	        if($success == 'SUCCESS'){
	            $erorr = 'Signed up! Sign in to access your acount.';
	        }
	    }
	    ?>
	    <div class="Container">
		<div class="SignIn">
			<h1>Sign In</h1>
            <hr class="divider">
            <h1><?php echo $sign_in_erorr?></h1>
			<form action="sign_in.php" method="POST">
                <div class="icon">
					<i class='bx bxs-user' ></i>
				</div>
				<input type="text" name="name"  id="username" placeholder="Username" required/><br>
				<div class="icon">
					<i class='bx bxs-lock-alt' ></i>
                </div>
				<input type="password" name="password" id="password" placeholder="Password"  required/><br>
				<input class="Submit" value="Sign In" type="submit" name="sign_in"/>
			</form>
		</div>
		<div class="SignUP">
			<h1>Sign Up</h1>
            <hr class="divider">
            <h1><?php echo $erorr ?></h1>
			<form action="sign_in.php" method="POST">
                <div class="icon">
					<i class='bx bxs-user' ></i>
				</div>
					<?php
				if(empty($ex_user_name) || empty($ex_email)){?>
				    <input type="text" name="name"  id="username" placeholder="User Name" required/><br>
				    <input type="text" name="email"  id="email" placeholder="Email" required/><br>
				    <?php }
				    if(!empty($ex_user_name) && !empty($ex_email)){?>
				        <input type="text" name="name"  id="username" value="<?php echo $ex_user_name?>" required/><br>
			        	<input type="text" name="email"  id="email" value="<?php echo $ex_email?>" required/><br>
				<?php }?>
				<div class="icon">
					<i class='bx bxs-lock-alt' ></i>
                </div>
				<input type="password" name="password" id="password" placeholder="Password"  required/><br>
				<input type="password" name="re_password" id="repassword" placeholder="Password Again"  required/><br>
				<input class="Submit" value="Sign Up" type="submit" name="sign_up"/>
			</form>
		</div>
		</div>
	</body>
	<?php
include "footer.php";
?>
