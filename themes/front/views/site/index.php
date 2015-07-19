this is First Page



<?
echo $x . "<br/>";
echo $y;

?>

<h1>Hello Front Theme</h1>

<?php
echo CHtml::link("Send var x" , array("Test/ParamFromView" , "x" => 10 ));
echo "<br/>";
echo CHtml::link("back" , array("Main/index"  ));
echo "<br/>";
echo CHtml::link("home" , array("/"  ));

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
