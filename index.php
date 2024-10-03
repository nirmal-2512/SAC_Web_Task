<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAC Form Task</title>
</head>
<body>
  
  <main>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

      <label for="name" class="labels labelname"> Enter your name : </label>
      <input type="text" class="input" name="name" placeholder="Name">

      <label for="email" class="labels labelemail"> Enter your email address : </label>
      <input type="email" class="input" name="email" placeholder="Name">

      <label for="gender" class="labels labelgender"> Enter your Gender : </label>
      <input type="text" class="input" name="gender" placeholder="Gender">

      <label for="city" class="labels labelcity"> Enter your City : </label>
      <input type="text" class="input" name="city" placeholder="city">

      <label for="number" class="labels labelnumber"> Enter your Phone Number : </label>
      <input type="number" class="input" name="number" placeholder="Name">

      <button action="submit"> SUBMIT </button>
    </form>


    <?php

    if($_SERVER["REQEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $city = htmlspecialchars($_POST["city"]);
        $number = htmlspecialchars($_POST["number"]);

        if(empty($name) || empty($email) || empty($gender) ||  empty($city) || empty($number)){
          // header('Location: ../index.php');
          // echo "<script>window.location.href = 'index.php';</script>";
          exit();
        }
        echo "Thank You for Sumitting the Data";
        echo "<br>";
        echo $firstname;
        echo "<br>";
        echo $lastname;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $number;
    }else{
      // header('Location : ../index.php');      //sending user to index page again 
      echo "<script>window.location.href = '../index.php';</script>";
      
  }

    ?>
  </main>
</body>
</html>