<?php 
    $link =  mysqli_connect("localhost", "farid", "" , "user");
    $sql = "SELECT id, nom, prenom, email, message FROM `user`";
    $results = mysqli_query($link, $sql);
?>
<?php echo "<table border = '1px' class='table table-dark'>" ?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">MAIL</th>
      <th scope="col">Message</th>
    </tr>
  </thead>

  <?php foreach ($results as $result) : ?>
  <tbody class="">
    <tr>
      <th scope="row"><?php echo $result["id"] ?> </th>
      <th scope="row"><a class="text-success" href="user.php?id="><?php echo $result["nom"] ?></a></th>
      <th scope="row"><?php echo $result["prenom"] ?> </th>
      <th scope="row"><?php echo $result["email"] ?> </th>
      <th scope="row"><?php echo $result["message"] ?> </th>
      <td scope="col">
      <button class="btn btn-danger">
          <a  class="text-dark"href="up_user.php?id= <?php echo $result["id"] ?>"> modifier</a>
      </button>

      <button class="btn btn-danger">
          <a  class="text-dark"href="del_user.php?id= <?php echo $result["id"] ?>"> suprimer</a>
      </button>
</td>
  </tbody>
  <?php endforeach ?>

<?php echo "</table>" ?>
