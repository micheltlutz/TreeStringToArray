<?php
/**
 * TreeStringToArray - Manipular Api retorno de containers Storage in Oracle Storage Cloud Service
 * PHP Version ^5.6
 * @link https://github.com/micheltlutz/TreeStringToArray TreeStringToArray GitHub project
 * @author Michel Anderson Lütz Teixeira <michel@mastersmx.com>
 * @copyright 2017 - Michel Anderson Lütz Teixeira
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
class TreeStringToArray
{
  /*
  * Array para manipulação
  * @var array
  */
  private $array;
  /*
  * String separadora de diretórios
  * @var string
  */
  private $spliter;
  
  /**
  * Construtor
  * @param array $_array Array para manipulação
  * @param string $_spliter String separadora de diretórios
  * @access public
  * @return array
  */
  public function __construct($_array = array(), $_spliter = "/")
  {
    $this->array = $_array;
    $this->spliter = $_spliter;
  }
  /**
  * Processa array de diretórios em string retornando estrutura em array
  * @access public
  * @return array
  */
  public function getArray()
  {
    $path_tree = array();
    foreach ($this->array as $path => $title) {
      $list = explode($this->spliter, trim($path, $this->spliter));
      $last_dir = &$path_tree;
      foreach ($list as $dir) {
        $last_dir =& $last_dir['subdirs'][$dir]; //joga valor ref para var
        $last_dir_tmp = &$last_dir; //recupera valor ref para nova var
        if(!isset($last_dir_tmp["subdirs"])){
            $last_dir_tmp["path"][] = $path;
        } else {
          $last_dir_tmp["path"][] = $path;
        }
        $last_dir =& $last_dir_tmp;
      }//fim foreach 2
    }//fim foreach1
    $localArray = $this->array;
    $arrF = $path_tree["subdirs"];
    return $arrF;
  }
}
?>
