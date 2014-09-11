<?php
	$this->extend('DataCenter.default');
	echo $this->element('flash_messages', array(), array('plugin' => 'DataCenter'));
?>
<div id="content">
	<?php echo $this->fetch('content'); ?>
</div>