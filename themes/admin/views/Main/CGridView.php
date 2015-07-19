<?php




$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $groups,
    'columns' => array(
        'id',
        'group_name'
    )
));





?>
