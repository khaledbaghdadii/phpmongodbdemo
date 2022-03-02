<?php 
require 'vendor/autoload.php';
$client= new MongoDB\Client("mongodb://localhost:27017");

$booksdb= $client->booksdb; //created a mongodb database
$bookscollection = $booksdb->bookscollection;

if(isset($_POST["delete"])){
    $id = $_POST["id_to_delete"];
    $deleteResult=$bookscollection->deleteOne(["_id"=>new MongoDB\BSON\ObjectId($id)]);
    // echo var_dump($deleteResult);
    unset($_POST["delete"]);
    // echo $id;
    header("Location:dashboard.php");
  
}

?>