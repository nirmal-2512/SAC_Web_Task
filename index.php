<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAC Form Task</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  
  <main>
  <div class="container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

      <label for="name" class="labels labelname"> Enter your name : </label>
      <input type="text" class="input" name="name" placeholder="Name">
      <br>
      <label for="email" class="labels labelemail"> Enter your email address : </label>
      <input type="email" class="input" name="email" placeholder="Name">
      <br>

      <label for="gender" class="labels labelgender"> Enter your Gender : </label>
      <input type="text" class="input" name="gender" placeholder="Gender">
      <br>

      <label for="city" class="labels labelcity"> Enter your City : </label>
      <input type="text" class="input" name="city" placeholder="city">
      <br>

      <label for="number" class="labels labelnumber"> Enter your Phone Number : </label>
      <input type="number" class="input" name="number" placeholder="Name">

      <br>
      <button action="submit" class="button"> SUBMIT </button>
      <br>
    </form>
  </div>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $city = htmlspecialchars($_POST["city"]);
        $number = htmlspecialchars($_POST["number"]);

        if(empty($name) || empty($email) || empty($gender) ||  empty($city) || empty($number)){
        //   // header('Location: ../index.php');
          echo "<script>window.location.href = 'index.php';</script>";
          exit();
        }
        // echo "<p>Thank You for Sumitting the Data</p>";
        // echo "<br>";
        // echo $name;
        // echo "<br>";
        // echo $gender;
        // echo "<br>";
        // echo $email;
        // echo "<br>";
        // echo $number;
    }else{
      echo "<p> Something Went Wrong Please Try Again</p>";
    
    }
    
    ?>
  </main>
</body>
</html>