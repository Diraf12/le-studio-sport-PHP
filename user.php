<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <title>user</title>
</head>

<body>


</body>

</html>

<?php
$link = mysqli_connect("localhost", "farid", "", "user");
$id = $_GET["id"];
//var_dump($_GET);
$sqli = "SELECT * FROM  user WHERE id = $id";
$result = mysqli_query($link, $sqli);
$row = mysqli_fetch_assoc($result);
//var_dump($row);
?>

<div class="bg-image" style="background-image: url('https://images.unsplash.com/photo-1634804306598-f2efe3ead034?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2938&q=80');
      height: 100vh;">
  <br>
  <h1 class="text-center text-white display-1"> <em> Modifier utilisateur </em></h1>
  <form class="form_user p-5" method="POST" action="up_user.php">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <div class="form-group d-flex justify-content-center">
      <!-- <label class="text-white display-6" for="email">Email</label> -->
      <input type="email" placeholder="votre e-mail" name="email" class="form-control-lg mb-3" value="<?php echo htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8') ?>">
    </div>
    <div class="form-group d-flex justify-content-center">
      <!-- <label class="text-white display-6" for="password">Mot de passe</label> -->
      <input type="password" name="password" class="form-control-lg " value="<?php echo htmlspecialchars($row["password"], ENT_QUOTES, 'UTF-8') ?>">
    </div>
    <div class="form-group d-flex justify-content-center m-3">
      <a href="users.php"><input type="button" value="Retour Liste" class="btn btn-primary m-2"></a>
      <input type="submit" name="modifier" value="Modifier" class="btn btn-success m-2">

    </div>
  </form>
</div>