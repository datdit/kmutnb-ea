<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

echo CHtml::ajaxLink(
        'แสดงเวลา',
        array('ajax/reqTest01'),
        array('update' => '#req_res')
        );

?>

<div id="req_res"></div>