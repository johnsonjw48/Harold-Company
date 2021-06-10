<?php

class User{

 private $id;
 private $nom;
 private $prenom;
 private $identifiant;
 private $email;
 private $telephone;
 private $mdp;




 
function __construct(array $data){
    //var_dump($data);
 
   $this->setNom($data['Name']);
   $this->setPrenom($data['Surname']);
   $this->setIdentifiant($data['username']);
   $this->setEmail($data['email']);
   $this->setTelephone($data['Telephone']);
   $this->setMdp($data['pass']);

  }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param mixed $pseudo
     */
    public function setIdentifiant($identifiant): void
    {
        $this->identifiant = $identifiant;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp): void
    {
        $this->mdp = $mdp;
    }

    
     public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $mdp
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }


}
