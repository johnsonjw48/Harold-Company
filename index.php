<?php 


// error_reporting(0);

session_start();



include "Classes/user.classes.php";

include "Classes/bien.classes.php";

include "Modèle/userModele.php";

include "Modèle/bienModele.php";

include "Controleur/userController.php";

include "Controleur/bienController.php";

$UserController = new UserController();

$bienController = new bienController();






if( isset($_GET['action']) ){
  $action = $_GET['action'];

 

  switch ( $action ) {
      case 'Connexion':
       include "Vues/header.php";
      include "Vues/Connexion.php";
      break;

      case 'Admin':
       include "Vues/header.php";
      include "Vues/Admin.php";
      break;

      case 'Louer':
     
       include "Vues/header2.php";
      include "Vues/Louer.php";
      break;

      case 'Acheter':
       include "Vues/header.php";
      include "Vues/Vendre.php";
      break;

      case 'Inscription':
       include "Vues/header.php";
      include "Vues/Inscription.php";
      break;



      case 'deconnexion' :
      session_destroy();
      header("location: .");
      break;
  }
}else {
  include "Vues/header2.php";
  include 'Vues/home.php';
}





if( !empty($_POST["Name"]) ){

$m = new User($_POST);
$UserController->inscription($m);
  
}


if( !empty($_POST['username'])){
  $m1 = new User($_POST);
  $UserController->connexion($m1);
}


if( !empty($_POST["Annonce"]) ){

$b = new Bien($_POST);
$bienController->insert($b);
  
}





include 'Vues/footer.php';


 ?>