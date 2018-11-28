<?php


session_start();

function co() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=ajaxgroupe;charset=utf8', 'root', '');
        return $bdd;
    }
    catch (PDOException $e) {
        die($e->getMessage());
    }
}

function getContinent() {
    $db = co();
    $reponse =  $db->query("SELECT * FROM continents ORDER BY id ASC"); 
    return $reponse;
}

function getPays() {
    $db = co();
    $reponse =  $db->query("SELECT * FROM pays ORDER BY id ASC"); 
    return $reponse;
}