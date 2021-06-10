<?php

class UserController{

  function inscription($data){

     $modele = new UserModele();
     $modele->inscription($data);

  }

  function connexion($data){
    $modele2=new UserModele();
    $modele2->connexion($data);
    header("location: .");
  }
}

