<?php
$link = mysqli_connect("localhost","farid","","user");
$sql = "SELECT id, CONCAT(prenom, ' ', nom,' ', email) AS pseudo FROM user";
?>
<?php 
    $result = mysqli_query($link,$sql);
?>
<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">Id</th> -->
      <th scope="col">pseudo</th>
    </tr>
  </thead>
  <?php while($row = mysqli_fetch_assoc($result)) : ?>
     <pre><?php var_dump($row);?></pre> 
  <tbody>
  <tr>
      <th scope="row"><a href="user.php?id=<?php echo $row["id"]?>"><?php echo $row ["pseudo"]?></a></th>
    </tr>
  </tbody>
  <?php endwhile; ?>
</table>