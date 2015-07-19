<div id="breadCrumb">
	<ul class="breadcrumb">
    <?php 
    foreach($this->crumbs as $crumb) {
        if(isset($crumb['url'])) {
            echo '<li>' . CHtml::link($crumb['name'], $crumb['url']) . '</li>';
        } else {
            //echo '<li>' . $crumb['name'] . '</li>';
            echo '<li>' . CHtml::link($crumb['name'], '#') . '</li>';
        }
        /*
        if(next($this->crumbs)) {
            echo $this->delimiter;
        }
         * 
         */
    }
    ?>
        </ul>
</div>