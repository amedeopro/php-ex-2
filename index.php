<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Password</title>
  </head>
  <body>

    <?php $password = $_GET['password']; ?>

      <?php if ($password === 'boolean') { ?>
        <h2 style='color: green;'>Password Corretta</h2>
      <?php } else if ($password === NULL) { ?>

        <h2 style='color: yellow;'>Devi inserire la password</h2>

      <?php } else if ($password !== 'boolean')  { ?>

        <h2 style='color: red;'>Password errata</h2>

      <?php }; ?>







  </body>
</html>
