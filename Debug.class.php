<?php
/**
 * TreeStringToArray - Manipular Api retorno de containers Storage in Oracle Storage Cloud Service
 * PHP Version ^5.x
 * @link https://github.com/micheltlutz/TreeStringToArray TreeStringToArray GitHub project
 * @author Michel Anderson Lütz Teixeira <michel@mastersmx.com>
 * @copyright 2017 - Michel Anderson Lütz Teixeira
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
class Debug
{
  public static function exibe($_variavel, $_descricao = '', $_cor = '#FF0000', $_size = 2)
  {
    if (trim($_descricao) != "") {
      echo "<font face='Verdana' color='" . $_cor . "' size=' margin:12px; " . $_size . "px'>Exibindo " . $_descricao . "</font>";
    }
    echo "<font face='Verdana' size='" . $_size . "px'>";

    echo "<pre class='pre-scrollable' style='margin:30px;'>";
    print_r($_variavel);
    echo "</pre>";
    echo "</font>";
  }
}
?>
