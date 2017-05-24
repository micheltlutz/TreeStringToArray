<?php
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
