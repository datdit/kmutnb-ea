<?php
echo CHtml::link("Send var x" , array("Test/ParamFromView" , "x" => 10 ));
echo "<br/>";
echo CHtml::link("back" , array("Test/ViewData"  ));
echo "<br/>";
echo CHtml::link("home" , array("/"  ));

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
