<?php


function addUser(PDO $pdo, string $username, string $email, string $password): bool
{
    $query = $pdo->prepare("INSERT INTO user (username, email, password) VALUE (:username, :email, :password)");
    $query->bindValue(':username', $username);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);

    return $query->execute(); 
}
