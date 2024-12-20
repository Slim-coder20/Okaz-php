<?php


function addUser(PDO $pdo, string $username, string $email, string $password): bool
{
    $query = $pdo->prepare("INSERT INTO user (username, email, password) VALUE (:username, :email, :password)");

    // Changement de mot de passe pour sécurisé // 

    $password = password_hash($password,PASSWORD_DEFAULT); 

    $query->bindValue(':username', $username);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);

    return $query->execute(); 
}

// On créé une fonction qui permet de vérifier que tout les champs sont saisie correctement // 

