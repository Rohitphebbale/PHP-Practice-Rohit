<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Registration form</h1>
        <form action="index.php" method="post">
            First Name : <input type="text" placeholder="Your Name" name="firstname"> <br><br>
             Last Name : <input type="text" placeholder="Your lastName" name="lastname"> <br> <br>
              Email : <input type="text" placeholder="Your Email" name="email"><br> <br>
               Contact No : <input type="number" placeholder="Your Contact Number" name="contact"> <br><br>
               Password : <input type="password" placeholder="Password" name="password"><br><br>

            <input type="submit" name="submit">
        </form>
    </div>

    <div>
        <?php

        if(isset($_POST["submit"])){
            echo "User Submit..";
        }
        ?>
    </div>
</body>
</html>