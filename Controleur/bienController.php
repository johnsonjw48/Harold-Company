<?php

class bienController{

  function insert($data){

     $modele = new bienModele();
     $modele->insert($data);

  }

  
  function afficher(){
  	$modele= new bienModele;
  	
    return $modele->afficher();
  }

  function aff_details(){
    $modele= new bienModele;
    
    return $modele->aff_details();
  }
}