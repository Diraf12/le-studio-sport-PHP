<?php 
    $link =  mysqli_connect("localhost", "farid", "" , "user");
    $sql = "SELECT id, nom, prenom, email message FROM `user`";
    $results = mysqli_query($link, $sql);
?>

<?php  
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $msg = $_POST["message"];
    $link =  mysqli_connect("localhost", "farid", "" , "user");
    if(empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["email"]) 
){
        header("Location: ./contact.php?add=0");
    }else {
            $sql = "INSERT INTO user (nom, prenom, email, message) VALUES ('$nom', '$prenom', '$email', '$msg')";  
            if (mysqli_query($link, $sql)) {
                header("refresh:0; url=./contact.php?add=1");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
    }
    mysqli_close($link);
?>
