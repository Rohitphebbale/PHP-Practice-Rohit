<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document</title>
</head>
<body>

<!-- =============================== PHP ========================== -->

<?php
// $nameErr = $emailErr = $genderErr = $websiteErr = "";
// $name = $email = $gender = $comment = $website = "";

$nameErr = "";
$emailErr = "";
$genderErr ="";
$websiteErr = "";
$name = "";
$email = "";
$gender = "";
$comment = "";
$website = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST["submit"])){
   
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }
    else{
        $name = test_input($_POST["name"]);
    }
    if(!preg_match("/^[a-z A-Z-' ]*$/",$name)){
            $nameErr = "Only letters and white space allowed";
    }
}
            // ------------------------------------
    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }
    else{
        $email = test_input($_POST["email"]);
    }
     if( !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email Format";
    }
        //   --------------------------------------      
    if(empty($_POST["website"])){
         $website = "";
        // $websiteErr = "Invali URL";
    }
    else{
        $website = test_input($_POST["website"]);
    }
    // if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
    //     $websiteErr = "Invali URL";
    // }
        // ----------------------------------------------------

    if(empty($_POST["comment"])){
        $comment = "";
    }
    else{
        $comment = text_input($_POST["comment"]);
    }

    // ------------------------------------------------------------

    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }
    else{
        $gender = text_input($_POST["gender"]);
    }
?>


    <!-- // ------------------------------------------------------------- -->
    <!-- ============================ HTML =================== -->
    <form action="index.php" method="post"> 
    Name : <input type="text" name="name" value="<?php echo $name; ?>">
    <small class="error">* <?php echo $nameErr; ?></small>
    <br><br>
    
    E-mail : <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    
    Website : <input type="text" name="website" value="<?php echo $website; ?>">
    <span class="error">* <?php echo $websiteErr; ?></span>
    <br><br>
    
    Comment : <textarea name="comment" id="comment" cols="30" rows="3">
        <?php echo $comment; ?> </textarea>
        <br><br>
    
    Gender : 
        <input type="radio" name="gender" <?php if(isset($gender) && $gender == "Female") echo "checked"; ?>>Female;
        <input type="radio" name="gender" <?php if(isset($gender) && $gender == "male") echo  "checked";?> >Male:
        <input type="radio" name="gender" <?php if(isset($gender) && $gender == "Other") echo "checked"; ?>>Others;
                <span class="error">* <?php echo $genderErr; ?></span> <br><br>
    
    <input type="submit" name="submit">
    </form>
    
     

</body>
</html>