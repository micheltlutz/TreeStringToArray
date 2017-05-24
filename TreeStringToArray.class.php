<?php
class TreeStringToArray
{
  protected $array, $spliter;
  public function __construct($_array = array(), $_spliter = "/")
  {
    $this->array = $_array;
    $this->spliter = $_spliter;
  }
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
