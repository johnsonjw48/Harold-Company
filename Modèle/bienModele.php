<?php 

// include 'DB.php';

class bienModele extends DB{

 function insert($data){

    $sql3= "INSERT INTO `bien`(`Id_bien`, `Description`, `Image`, `Annonce`) VALUES (NULL, :description, :image, :annonce)";

    $insertion = $this->connect()->prepare($sql3);

    $insertion->execute([
      "description"      => $data->getDescription(),
      "image"   => $data->getImage(),
      "annonce"  => $data->getAnnonce(),  
    ]);
    
  }

  function afficher(){

  	 $sql4= "SELECT * FROM `bien`";

  	  $stmt3=$this->connect()->prepare($sql4);
     $stmt3->execute();

     $tab=[];

     while ($bien= $stmt3->fetch()) {
        $tab[]= new Bien($bien);
     }
     return $tab;

    

  }


}
