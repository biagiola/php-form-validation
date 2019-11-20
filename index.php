<?php 

require('user_validator.php');

  // in $_POST we have the values of the username input and email input
  if(isset($_POST['submit'])){
    // validate entries
    $validation = new UserValidator($_POST);
    $erros = $validation->validateForm();
    
    // save data to db
    
    
  }
?>

<html lang="en">
<head>
  <title>PHP OOP</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  
  <div class="new-user">
    <h2>Create a new user</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

      <label>username: </label>/* htmlspecialchars: when we enter a wrong value it doesnt desapear */
      <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']) ?? '' ?>" >
      <div class="error">
        <?php echo $erros['username'] ?? '' ?>
      </div>

      <label>email: </label>
      <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>">
      <div class="error">
        <?php echo $erros['email'] ?? '' ?>
      </div>

      <input type="submit" value="submit" name="submit">

    </form>
  </div>

</body>
</html>
