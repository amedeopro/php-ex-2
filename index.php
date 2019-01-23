<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Password</title>
  </head>
  <body>

    <?php $password = $_GET['password']; ?>

      <?php if (!empty($password) && $password === 'boolean') { ?>
        <h2 style='color: green;'>Accesso Riuscito</h2>
      <?php } else { ?>

        <h2 style='color: red;'>Accesso Negato</h2>

      <?php }  ?>







  </body>
</html>
