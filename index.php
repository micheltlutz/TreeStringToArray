<?php
/**
 * TreeStringToArray - Manipular Api retorno de containers Storage in Oracle Storage Cloud Service
 * PHP Version ^5.6
 * @link https://github.com/micheltlutz/TreeStringToArray TreeStringToArray GitHub project
 * @author Michel Anderson Lütz Teixeira <michel@mastersmx.com>
 * @copyright 2017 - Michel Anderson Lütz Teixeira
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
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
