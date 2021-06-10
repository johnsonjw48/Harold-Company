<?php

class Bien{

 private $id;
 private $annonce;
 private $description;
 private $image;
 


function __construct(array $data){
    //var_dump($data);
 
   $this->setAnnonce($data['Annonce']);
   $this->setDescription($data['Description']);
   $this->setImage($data['Image']);
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
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * @param mixed $prenom
     */
    public function setAnnonce($annonce): void
    {
        $this->annonce = $annonce;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $nom
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $email
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    

}
