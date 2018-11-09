<?php
// check if the user clicked the button
if (isset($_POST['signup-submit'])) {

  require 'dbh.inc.php';

  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordrepeat = $_POST['pwd-repeat'];

  if (empty($username) || empty($email) || empty($password) || empty($passwordrepeat)) {
    header('Location: ../signup.php?error=emptyfields&uid=' . $username . '&mail=' . $email);
    exit();
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[a-zA-Z0-9]*$/', $username)) {
    header('Location: ../signup.php?error=invalidmail&uid');
    exit();
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../signup.php?error=invalidmail&uid=' . $username);
    exit();
  } else if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
    header('Location: ../signup.php?error=invaliduid&mail=' . $email);
    exit();
  } else if ($password !== $passwordrepeat) {
    header('Location: ../signup.php?error=passwordcheck&uid=' . $username . '&mail=' . $email);
    exit();
  }

  // if username is already taken
  else {

    $sql = 'SELECT uidUsers FROM users WHERE uidUsers=?';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header('Location: ../signup.php?error=sqlierror');
      exit();
    }
// ! 9 nov finisged here
  }

}
