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

<div class="bg-image" style="background-image: url('https://images.unsplash.com/photo-1546198632-9ef6368bef12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
      height: 100vh;">
  <br>
  <h1 class="text-center text-white display-1"> <em> Enregistrement </em></h1>

  <form class="form_user p-5 " method="POST" action="form_contact.php">
    <div class="form-group d-flex justify-content-center">
      <!-- <label class="text-white display-6 m-auto" for="email">Email</label> -->
      <input type="email" placeholder="saisir une adresse e-mail" name="email" class="form-control-lg mb-3 " value="">
    </div>
    <div class="form-group d-flex justify-content-center">
      <!-- <label class="text-white display-6" for="password">Mot de passe</label> -->
      <input type="password" placeholder="saisir un mot de passe" name="password" class="form-control-lg " value="">
    </div>
    <div class="form-group d-flex justify-content-center m-3">
      <a href="users.php"><input type="button" value="Retour Liste" class="btn btn-primary m-2"></a>
      <input type="submit" name="modifier" value="Enregistrer" class="btn btn-success m-2">

    </div>
  </form>
</div>