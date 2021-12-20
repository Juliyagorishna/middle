<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
session_start();

if ($_POST) {
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    require_once 'Databasea.php';
    $database = new Databasea();
    $user = $database->GetUser($_POST['name'], $_POST['email']);
    //var_dump($user);
    //if (count($user) == 0) {
        //echo "Такой пользователь не найден.";
       // exit();
   // } else if (count($user) == 1) {
        //echo "Логин или праоль введены неверно";
       // exit();
  //  }

    setcookie('user', $user['user_login'], time() + 3700, "/");
    header('Location: table.php');
    exit();


//$mysql->close();

}

?>
<html>

<body>

<form method="post">
    Name: <input type="text" name="name" /> <br />
Email: <input type="email" name="email" /> <br />
<input type="submit" name="submit" value="Войти" />
</form>
</body>
</html>
