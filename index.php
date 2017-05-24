<?php
require_once "Debug.class.php";
require_once "TreeStringToArray.class.php";

$array = array('/backups' => array('type'=>'folder','size'=>'4k'),
'/backups/cliente' => array('type'=>'folder','size'=>'4k'),
'/backups/cliente/diario' => array('type'=>'folder','size'=>'4k'),
'/backups/cliente/mensal' => array('type'=>'folder','size'=>'4k'),
'/musicas' => array('type'=>'folder','size'=>'4k'),
'/musicas/michel' => array('type'=>'folder','size'=>'4k'),
'/musicas/michel/psy' => array('type'=>'folder','size'=>'4k'),
'/musicas/igor' => array('type'=>'folder','size'=>'4k'),
'/musicas/igor/rock' => array('type'=>'folder','size'=>'4k')
);

$lista = new TreeStringToArray($array);
Debug::exibe($lista->getArray(), "TREE");
?>
