<?php

class bienController{

  function insert($data){

     $modele = new bienModele();
     $modele->insert($data);

  }

  
  // function afficher(){
  // 	$modele= new bienModele;
  // 	$modele->afficher();
  // }
}