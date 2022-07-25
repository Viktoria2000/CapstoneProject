<?php
 
// connecting to DB 
    $connect = mysqli_connect("localhost", "PleasyPAdmin", "Chr1stopher!2021", "ThePleasyPlantling_db");
// error message 
    if(!$connect){
        echo "<h3>Not able to establish Database Connection</h3>";
    }
    
    
      //--------------- Getting all Recipes to display -----------------//
        $SQL = "SELECT * FROM Recipes"; // selecting everything from recipes
        $Display = mysqli_query($connect, $SQL);// running the query
        
        $new_display = mysqli_query($connect, "SELECT * FROM Recipes ORDER BY Date");
        
        $id = 0;
        
        // if header contains id
        if(isset($_REQUEST['ID'])){
            $ID = $_REQUEST['ID'];
            
            $SQL= "SELECT * FROM Recipes WHERE ID = $ID";
            $Display = mysqli_query($connect,$SQL);
            
            while($row = $Display->fetch_assoc()) {
                $resultstring = $row['Nutrition'];
                $SQL1 = "SELECT * FROM Nutrition WHERE ID = $resultstring";
            }
 
            $NDisplay = mysqli_query($connect,$SQL1);
            
            
            $rating_display = mysqli_query($connect,"SELECT * FROM Reviews WHERE recipe_id = $ID");


        }
        
        
        
        //------------------- Searching --------------------------//
        $SQL = "SELECT * FROM Recipes ";
        $Results = mysqli_query($connect,$SQL);
        $First = True;
        
        
        if(isset($_REQUEST['Search'])){
             $S = $_REQUEST['Keyword'];
             $A = $_REQUEST['Allergens'];
             $Type = $_REQUEST['Type'];
             $Time = $_REQUEST['Time'];
             $Sort = $_REQUEST['Sort'];
             
             $SQL = "SELECT * FROM Recipes WHERE ";
             
            if(!empty($S)){
                 $SQL .= " LOWER(Name) LIKE '%".strtolower($S)."%'";
                 $First = False;
            }
            if($A != "None"){
                if($First){
                    $SQL .= " Allergens NOT LIKE '%".$A."%'";
                    $First = False;
                }else{
                    $SQL .= " AND Allergens NOT LIKE '%".$A."%'";
                }
                    
            }
            if($Type != "None"){
                if($First){
                    $SQL .= " Type LIKE '%".$Type."%'";
                    $First = False;
                }else{
                    $SQL .= " AND Type LIKE '%".$Type."%'";
                }
                    
            }
            if($Time != "None"){
                if($First){
                    $SQL .= " Total_Time <= $Time";
                    $First = False;
                }else{
                    $SQL .= " AND Total_Time <= $Time";
                }
            }
                if($Sort == "Quickest"){
                    if($First){
                        $SQL = "SELECT * FROM Recipes ORDER BY Total_Time ASC";
                    }else{
                        $SQL .= " ORDER BY Total_Time ASC";
                    }
                 }else if($Sort == "Slowest"){
                     if($First){
                         $SQL = "SELECT * FROM Recipes ORDER BY Total_Time DESC";
                     }else{
                        $SQL .= "  ORDER BY Total_Time DESC";
                     }
                 }else if($Sort == "Newest"){
                     if($First){
                        $SQL = "SELECT * FROM Recipes ORDER BY Date ASC";
                     }else{
                          $SQL .= " ORDER BY Date ASC";
                     }
                 }else if ($Sort == "Oldest"){
                     if($First){
                        $SQL = "SELECT * FROM Recipes ORDER BY Date DESC";
                     }else{
                        $SQL .= " ORDER BY Date DESC"; 
                     }
                 }

            $Results = mysqli_query($connect,$SQL);
            $sucess = mysqli_num_rows($Results);
            if ($sucess == 0) {
                header("Location: Recipes.php?error=No Results");
            }
            
         }
         /*
        $SQL = "SELECT * FROM Recipes ";
        $Results = mysqli_query($connect,$SQL);
        
        
        if(isset($_REQUEST['filter'])){
            $I = $_REQUEST['include'];
            $E = $_REQUEST['exlcude'];
            
              $SQL = "SELECT * FROM Recipes WHERE ";
              
            if(!empty($I)){
                 $SQL .= " LOWER(Ingredients) LIKE '%".strtolower($I)."%'";
                 if(!empty($E)){
                    $SQL .= " AND LOWER(Ingredients) NOT LIKE '%".strtolower($E)."%'";
                }
            }
            if(!empty($E)){
                $SQL .= " LOWER(Ingredients) NOT LIKE '%".strtolower($E)."%'";
            }
            $Results = mysqli_query($connect,$SQL);
            $sucess = mysqli_num_rows($Results);
            if ($sucess == 0) {
                header("Location: Recipes.php?error=No Results");
            }
            
        }*/


 
                  //--------------- sign in -----------------//
         // sets off when people click login
    if(!empty($_POST['sign_in'])){
         $sign_in_erorr = " ";
        // requesting data from form
        $Username = $_POST['name'];
        $Password = $_POST['password'];
        
        // SQL query to execute 
        $SQL = "SELECT id FROM Users WHERE name = '$Username' AND password = '$Password'";
        $query = mysqli_query($connect,$SQL);
        $sucess = mysqli_num_rows($query);

        if($sucess>0){ 
            
            session_start();
            $_SESSION['username'] = $Username;
            $_SESSION['signed_in'] = true;
            
            header("Location: https://pleasyplantling.thedesignerduck.co.uk");
            

        }
        else{
            $sign_in_erorr = "Incorrect Login details";
            header("Location: sign_in.php");
             
        }
    }


        
             
                  //--------------- sign up -----------------//
         // sets off when people click login
    if(!empty($_POST['sign_up'])){
        $erorr = " ";
        // requesting data from form
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];
       
        $name_check = mysqli_query($connect, "SELECT * FROM Users WHERE name = '$Name' ");
        $email_check = mysqli_query($connect, "SELECT * FROM Users WHERE email = '$Email' ");
        if(mysqli_num_rows($name_check) == 0 && mysqli_num_rows($email_check) == 0) {
           // SQL query to execute   
            $SQL = "INSERT INTO Users(name, email, password) VALUES ('$Name', '$Email', '$Password')";
        $query = mysqli_query($connect,$SQL);
        $erorr = "Sucessful Sign Up! Now sign in.";
         header("Location: https://pleasyplantling.thedesignerduck.co.uk/sign_in.php?sign_up=SUCCESS");
        }else{
            $erorr = "Username taken or Email taken!";
        
        }
        
  
    }

        if(!empty($_POST['post_review'])){
            $recipe_id = $_GET['recipe'];
            $rating = $_POST['rate'];
            $comment = $_POST['comment'];
            $user_name = $_POST['name'];
            $id_check = mysqli_query($connect, "SELECT id FROM Users WHERE name = '$user_name'");
            $id = 0;
                        
            if (mysqli_num_rows($id_check) > 0) {
              while($user = mysqli_fetch_assoc($id_check)) {
                  $id = $user["id"];
              }
            } 
            $ID = strval($recipe_id.$id);
            $SQL = "INSERT INTO Reviews(ID, recipe_id, user_id, stars, comments) VALUES ('$ID','$recipe_id', '$id', '$rating', '$comment')";
            $query = mysqli_query($connect,$SQL);
            header("Location: https://pleasyplantling.thedesignerduck.co.uk/view_recipe.php?ID=$recipe_id");

    }
    
           if(!empty($_POST['save_recipe'])){
            $recipe_id = $_POST['recipe_id'];
            $user_name = $_POST['name'];
            $id_check = mysqli_query($connect, "SELECT id FROM Users WHERE name = '$user_name'");
            $id = 0;
                        
            if (mysqli_num_rows($id_check) > 0) {
              while($user = mysqli_fetch_assoc($id_check)) {
                  $id = $user["id"];
              }
            } 
 
            $existing_save = mysqli_query($connect, "SELECT * FROM Bookmarks WHERE user_id = '$id' AND recipe_id = '$recipe_id' ");
            if (mysqli_num_rows($existing_save) == 1) {
                $saved = "Recipe Saved!";
            }else{
               $SQL = "INSERT INTO Bookmarks(user_id, recipe_id) VALUES ('$id','$recipe_id')";
                $query = mysqli_query($connect,$SQL); 
                
            }


    }

 
?>