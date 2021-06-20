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
        $b = new Bien($bien);
        $b->setId($bien['Id_bien']);
        $tab[]=$b;
     }
     return $tab;

    

  }


  function aff_details(){
      
      $idf=$_GET['id'];
      $sql5= "SELECT * FROM `bien` WHERE `Id_bien`=$idf";
      $stmt4=$this->connect()->prepare($sql5);
      $stmt4->execute();

      $details=$stmt4->fetch();
      return $details;


  }


}
