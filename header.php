<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Login System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <nav>
    <a href="#">
      <img src="img/PS logo_square.png" alt="logo">
    </a>
    <div class="menu">
    <ul>
      <li><a href="index.php">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Team</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    </div>
    <div class="form-section">
      <!-- 'post' is a safe method -->
      <form action="includes/login.inc.php" method="post">
        <input id="user" type="text" name="mailuid" placeholder="Username/Email">
        <input id="pwd" type="password" name="pwd" placeholder="Password" autocomplete="new-password">
        <button type="submit" name="login-submit">Login</button>
      </form>
      <div id="signup">
      <a href="signup.php">Signup</a>
      </div>
      <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>
      </form>

    </div>
  </nav>
</header>
  
</body>
</html>