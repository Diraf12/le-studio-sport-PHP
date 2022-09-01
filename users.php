<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <title>users</title>
</head>
<div class="bg-image" style="background-image: url('https://images.unsplash.com/photo-1506869640319-fe1a24fd76dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80');
      height: 100vh;">
  <br>

  <body>
    <?php
    $link =  mysqli_connect("localhost", "farid", "", "user");
    $sql = "SELECT id, nom, prenom, email, message FROM `user`";
    $results = mysqli_query($link, $sql);
    ?>
    <?php echo "<table border = '1px' class='table table-dark'>" ?>


    <h1 class="text-center display-1"> <em> Tous les utilisateurs </em> </h1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOM</th>
          <th scope="col">PRENOM</th>
          <th scope="col">EMAIL</th>
          <th scope="col">Message</th>
        </tr>
      </thead>

      <?php foreach ($results as $result) : ?>
        <tbody class="">
          <tr>
            <th scope="row"><?php echo $result["id"] ?> </th>
            <th scope="row"><a class="text-success display-6" href="user.php?id=<?php echo $result["id"] ?>"><?php echo $result["nom"] ?></a></th>
            <th scope="row"><?php echo $result["prenom"] ?> </th>
            <th scope="row"><?php echo $result["email"] ?> </th>
            <th scope="row"><?php echo $result["message"] ?> </th>
            <td scope="col">

              <button class="btn btn-danger">
                <a class="text-dark text-decoration-none" href="del_user.php?id= <?php echo $result["id"] ?>"> suprimer</a>
              </button>
            </td>

        </tbody>

      <?php endforeach ?>

      <?php echo "</table>" ?>

</div>

</body>
</html>