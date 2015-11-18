<?php
	$this->extend('DataCenter.default');
    $this->start('flash_messages');
	    echo $this->element('flash_messages', array(), array('plugin' => 'DataCenter'));
    $this->end();
?>
<div id="content">
	<?php echo $this->fetch('content'); ?>
</div>