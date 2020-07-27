<?php
require_once "../bootstrap.php";

$compte= new Compte();
extract($_POST);
$compte->setNumAgence($numagence);
$compte->setNumCompte($numcompte);
$compte->setCleRib($clerib);
$compte->setMoral($moral);


$entityManager->persist($compte);
$entityManager->flush();

echo "success";
?>
