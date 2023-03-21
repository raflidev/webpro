<form method="POST">
  <p>username : <input type="text" name="user" placeholder="username"></p>
  <p>password : <input type="password" name="pass" placeholder="password"></p>
  <p><input type="submit" name="kirim"></p>
</form>
<?php if (isset($_POST)) : ?>
  <pre><?php print_r($_POST) ?></pre>
<?php endif ?>  