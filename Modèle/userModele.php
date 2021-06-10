<?php 

include 'DB.php';

class UserModele extends DB{

  function inscription ($data){

    $sql = "INSERT INTO `user`(`user_id`, `Nom`, `Prenom`, `Identifiant`, `Email`, `Telephone`, `Mdp`) VALUES (NULL, :nom, :prenom, :identifiant, :email, :telephone, :mdp)";


    $insert = $this->connect()->prepare($sql);

    $insert->execute([
      "nom"      => $data->getNom(),
      "prenom"   => $data->getPrenom(),
      "identifiant"  => $data->getIdentifiant(),  
      "email"    => $data->getEmail(),
      "telephone"      => $data->getTelephone(),
      "mdp"      => $data->getMdp(),
    ]);
    
   }


    function connexion($data){
    
    $sql2 = "SELECT `Identifiant`,`Mdp`,`Prenom` FROM user WHERE Identifiant = :Identifiant AND Mdp = :Mdp";

    $stmt = $this->connect()->prepare($sql2);

     $stmt->execute([
      "Identifiant" => $data->getIdentifiant(), 
      "Mdp" => $data->getMdp(),
    ]);


    if($stmt->rowCount() != 0){

        $user = $stmt->fetch();

       $_SESSION['user'] = $user;
          
      }else{
        echo "identifiant ou mdp incorrect";
      }

  }


 

}