<?php
$id=$_GET['id'];
$title=$_GET['title'];

try {
    require_once("db.php");
    $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
    PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM posts  WHERE id= :id";
    $result = $cnx-> prepare($sql);
    $result->bindParam(':id', $id);
    $result->execute();
    header('location:index.php');
} catch (Exception $e) {
    die('Erreur : '.$e->getmessage());
}

?>
