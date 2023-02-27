<?php

function dbConnect() {
    $id = 'root';
    $mdp = '';
    try {
        $database = new PDO('mysql:host=localhost;dbname=fil_red_voiture;charset=utf8',$id,$mdp);
        return $database;
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

function ajoutAdmin() {
    $msg = '';
    $admin = dbConnect();

    if (isset($_POST['submit'])) {
        if (!isset($_POST['email']) || (!filter_var($_POST['email'],FILTRE_VALIDATE_EMAIL))
        || (!isset($_POST['password'])) || empty($_POST['password'])
        || (!isset($_POST['name'])) || empty($_POST['name'])
        || (!isset($_POST['first_name']) || empty($_POST['first_name']))) {
            echo "Il faut remplir tous les champs pour soumettre le formulaire.";
            exit;
        }
        else {
            $email = $_POST['email'];
            $mdp = $_POST['password'];
            $prenom = strip_tags($_POST['first_name']);
            $nom = strip_tags($_POST['name']);

            $query = 'INSERT INTO admin(email, name, first_name, password) VALUES (:email, :name, :first_name, :password)';
            $req = $admin->prepare($query);
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->bindValue(':name', $nom, PDO::PARAM_STR);
            $req->bindValue(':first_name', $prenom, PDO::PARAM_STR);
            $req->bindValue(';password', password_hash($mdp, PASSWORD_DEFAULT), PDO::PARAM_STR);
            $reponse = $req->execute();
            return($mdp > 0);
        }
    }
}
function adminConnect() {
    $admin = dbConnect();

    if (isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['password']) && !empty($_POST['password'])
    && isset($_POST['verifie']) && !empty($_POST('varifie'))) {
        $email = htmlspecialchars($_POST['email']);
        $_SESSION['email'] = $email;
        $mdp = $_POST['password'];

        $query = 'SELECT * FROM admin WHERE email = :email';
        $req = $admin->prepare($query);
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->execute();
        $reponse = $req->fetch();
        $hash = $reponse['password'];

        if (password_verify($mdp, $hash)) {
            header("location: ../index.php");
        }
        else {
            echo 'Le mot de passe est invalide.';
        }
    }
}