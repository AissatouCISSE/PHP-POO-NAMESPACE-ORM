<?php
    // require_once "../../config/autoload.php";
    // use  Models\Manager;
    require_once "../../bootstrap.php";
    // require "Models/Config.php";
    // require "Models/Manager.php"; 
    // $prin = new Manager();
    // $pdo = $prin->getConnexion();
    // $typeC = $pdo->prepare('SELECT * FROM physique');
    // $typeC->execute();
    // $typecompte=$typeC->fetchALL();
    //var_dump($typecompte);?>
        <select type="select" id="client" name="client">
        		<meta charset="utf-8">
        		<option value="">Choisissez le client</option>
			<?php 
				$client = $entityManager->getRepository('morale');
				var_dump($client);
				$morale= $client->findAll();
			foreach ($morale as $moral): 
				
				?>
            	<option value="<?php echo sprintf ($moral->getId());?>"><?php echo sprintf("-%s\n", $moral->getNomEmployeur());?></option>
            <?php endforeach ;?>
    	</select>








    