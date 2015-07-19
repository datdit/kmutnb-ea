<?php $this->beginContent(); ?>
 
<div class="grid_4 alpha">
    <div class="sidebar">&nbsp;
    <?php foreach($this->portlets as $class=>$properties)
        $this->widget($class,$properties); ?>
    </div>
</div>
 
<div class="grid_9">
    <?php $this->widget('Breadcrumbs', array('crumbs'=>$this->crumbs)); ?>
 
    <div id="content">
        <?php echo $content; ?>
    </div>
</div>
 
<div class="grid_3 omega">
    <div class="sidebar">&nbsp;
    <?php foreach($this->portlets2 as $class=>$properties)
        $this->widget($class,$properties); ?>
    </div>
</div>
 
<?php $this->endContent(); ?>