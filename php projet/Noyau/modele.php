<?php

final class Modele
{
  
  public static function
    {

    define ('CHEMIN_VERS_FICHIER_INI', 'connex_base.ini');
    define ('BASE_DE_DONNEES', 'ma_base');
    $B_debug = true;
    $A_config = parse_ini_file(CHEMIN_VERS_FICHIER_INI, true);
    if (is_array($A_config)) {
      if ($B_debug) {
    $A_config = $A_config['serveur_developpement'];
    } else {
    $A_config
      
    }
    $S_dsn = $A_config['type'] . ':dbname=' . BASE_DE_DONNEES . ';host=' .
      $A_config['adresse_IP'];

    $O_conn= new PDO($S_dsn,
      $A_config['utilisateur'],
      $A_config['motdepasse']);
}


?>
