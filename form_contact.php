<?php  
    $link =  mysqli_connect("localhost", "farid", "" , "user", 8889);
    $email = $_POST["email"];
    $password = $_POST["password"];
    var_dump($password);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    var_dump($password_hash);
    $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password_hash')";
    if(!empty($email) && !empty($password)){
        if (mysqli_query($link, $sql))
        echo"c'est cool 👍";
        //header("location: ./enregistrement.php?add=0");
    }else { 
        echo"c'est pas cool 👎";            
                //header("location: ./enregistrement.php?add=1");                          
           }
    
    mysqli_close($link);
?>