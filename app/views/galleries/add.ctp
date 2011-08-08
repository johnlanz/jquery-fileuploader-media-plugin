<?php
	echo $html->script('jquery-1.6.2.min', false);
	echo $html->script('jquery-ui-1.8.14.custom.min', false);
	echo $html->script('jquery.fileUploader', false);
	echo $html->css('ui-lightness/jquery-ui-1.8.14.custom', null, array(), false);
	echo $html->css('fileUploader', null, array(), false);
?>

<div class="galleries form">
	<h2><?php __('jQuery Fileuploder Plugin');?></h2>
	<?php
		echo $this->Form->create('Gallery', array('type' => 'file'));
		echo $this->Form->input('file', array(
			'type' => 'file', 
			'label' => false, 'div' => false,
			'class' => 'fileUpload', 
			'multiple' => 'multiple'
		));		
		echo $this->Form->button('Upload', array('type' => 'submit', 'id' => 'px-submit'));
		echo $this->Form->button('Clear', array('type' => 'reset', 'id' => 'px-clear'));
		echo $form->end();
	?>
</div>

<script>
	$(function(){
		$('.fileUpload').fileUploader();
	});
</script>