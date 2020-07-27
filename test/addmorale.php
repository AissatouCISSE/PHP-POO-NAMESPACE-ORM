<?php
// require_once "../src/entities/Morale.php";
// require_once "../bootstrap.php";

// $compte= new Compte();
// $compte->setId(1);
// $compte->setNumAgence(356);
// $compte->setNumCompte(0000);
// $compte->setCleRib(34);
// $compte->setMoral(1);


// $entityManager->persist($compte);
// $entityManager->flush();

// echo $compte->getId();


require_once "../bootstrap.php";
if(isset($_POST['envoyer'])) {

$moral= new Morale();
    // 'nomemployeur'=>trim($_POST['nomemployeur'], ' '),
    // 'raisonsociale'=>trim($_POST['raisonsociale'], ' '),
    // 'rc'=> trim($_POST['rc'], ' '),
    // 'ninea'=>trim($_POST['ninea'], ' '),
    extract($_POST);
    $moral->setRaisonSociale($raisonsociale);
    $moral->setNomEmployeur($nomemployeur);
    $moral->setRc($rc);
    $moral->setNinea($ninea);
    
   
// ));

//    $manager->AddMoral($moral); 
$entityManager->persist($moral);
$entityManager->flush();

echo "success";
}
?>

