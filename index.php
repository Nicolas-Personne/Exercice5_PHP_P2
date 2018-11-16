<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <select name="check">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
      </select>
      <input type="submit" name="button" value="Valider">
    </form>
    <?php
    $gender = $_POST['check'];
    if (isset($_POST['button'])){
    if ($gender != 'homme'){
      echo 'C\'est une développeuse !!!';
    } else {
      echo 'C\'est un développeur !!!';
    }
  }
     ?>
  </body>
</html>
