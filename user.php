<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>user</title>
</head>
<body>
<?php 
$link = mysqli_connect("localhost", "farid", "", "user");
$id = $_GET["id"];
var_dump($_GET);
$sqli = 'SELECT id, nom, prenom, email, message FROM user WHERE id = $id';
$result = mysqli_query($link, $sqli);
$row = mysqli_fetch_assoc($result);
?>
<?php if (isset($id) && $id === $row["id"]) : ?>
    <?php endif; ?>
<table class="table">
  <thead class="thead">
    <tr>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">message</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row"><?php echo $row["nom"] ?></th>
    <th scope="row"><?php echo $row["prenom"] ?></th>
    <th scope="row"><?php echo $row["mail"] ?></th>
    <th scope="row"><?php echo $row["message"] ?></th>
</td>
  </tbody> 
</table> 
</body>
  </html>

  