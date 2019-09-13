<?php
var_dump($user);
?>

<link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/assets/styles/mystyle.css">

<form class='login' action="/user/login" method="POST">
<?php
    // if (!isset($_SESSION)) session_start();
    echo sha1(md5(microtime().'90CV2c10DF237dDFG2bfDF863c320FGDFbbKLe04e8c'.microtime()));
    echo 'Привет, '. ( $_COOKIE['my_name'] != '' ? $_COOKIE['my_name'] : 'Гость') . '!'; // Привет, Миша!
    print_r($_COOKIE);

?>

  <div class="container">
      <div class="cont">
    <label for="Phone"><b>Phone</b></label>
    <input class='lnp-login' type="text" placeholder="Enter Phone" name="Phone" required>

    <label for="Password"><b>Password</b></label>
    <input class='lnp-login'  type="password" placeholder="Enter Password" name="Password" required>

    <button class='btn-23' type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    </div>
  </div>


</form>