<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\GeneratedValue;
// use Doctrine\ORM\Mapping as ORM;
// use Doctrine\ORM\Mapping\ManyToOne;
// use Doctrine\ORM\Mapping\JoinColumn;
// namespace Models;
                              
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
/**
 * @Entity @Table(name="compte")
 **/
class Compte{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="integer") **/
    private $numagence;
    /** @Column(type="integer") **/
    private $numcompte;
    /** @Column(type="integer") **/
    private $clerib;
    /**
     * Many compte have one client. This is the owning side.
     * @ManyToOne(targetEntity="Morale" , inversedBy="compte")
     * @JoinColumn(name="morale_id" , referencedColumnName="id")
     */
    private $moral;
  

    //function de constructeur
    public function __construct(array $data)
    {
        // $this->hydrate($data);
    }

 //function hydrate
//  public function hydrate(array $data){
//     foreach ($data as $key => $value) {
//        $method= 'set'.ucfirst($key);

//        if(method_exists($this, $method)){
//            $this->$method($value);
//        }
//     }
// }
 // the getters ou accessur
 public function getId(){ return $this->id;}
 public function getNumAgence(){ return $this->numagence;}
 public function getNumCompte(){ return $this->numcompte;}
 public function getCleRib(){ return $this->clerib;}
//  public function getClient(){return $this->client;}
 public function getMoral(){return $this->moral;}

 


// the setters ou mutateur
public function setIdCompte($id){ $this->id=$id;}
public function setNumAgence($numagence){$this->numagence=$numagence;}
public function setNumCompte($numcompte){$this->numcompte=$numcompte;}
public function setCleRib($clerib){$this->clerib=$clerib;}
// public function setClient($client){$this->client=$client;}
public function setMoral($id){$this->moral=$moral;}
}