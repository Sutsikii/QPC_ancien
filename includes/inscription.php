<?php

if (isset($_POST["submitSignin"]))
{
    $name= $_POST["name"];
    $email= $_POST["email"];
    $password = $_POST["password"];

    $db = new PDO('mysql:host=localhost;dbname=question_pour_cafe', 'root','');

    $sql = "SELECT * FROM user where email = '$email'";
    $result = $db->prepare($sql);
    $result->execute();

    if($result->rowCount() > 0)
    {

    }
    else
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (prenom, email, password) VALUES ('$name','$email', '$password')";
        $req = $db->prepare($sql);
        $req->execute();
        echo"Vous êtes enregistré !";
    }
}

?>