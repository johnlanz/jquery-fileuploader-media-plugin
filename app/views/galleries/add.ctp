<?php
	echo $html->script('jquery-1.6.2.min', false);
	echo $html->script('jquery.fileUploader', false);
	echo $html->css('fileUploader', null, array(), false);
?>

<div class="galleries form">
	<h2><?php __('Upload Photo');?></h2>
	<?php
		echo $this->Form->create('Gallery', array('type' => 'file'));
		echo $this->Form->input('file', array('type' => 'file', 'label' => false, 'class' => 'imageUpload'));
		echo $this->Form->input('alternative');
		echo $this->Form->input('group');
		
		echo $this->Form->button('Submit', array('type' => 'submit', 'id' => 'pxUpload'));
		echo $this->Form->button('Clear', array('type' => 'reset', 'id' => 'pxClear'));
		echo $form->end();
	?>
</div>

<script>
	$(function(){
		$('.imageUpload').fileUploader({
			imageLoader: '<?php echo $html->url('/img/image_upload.gif'); ?>',
			allowedExtension: 'jpg|jpeg|gif|png',
			limit: 5,
			onFileChange: function(e, form) {
			
			},
			onFileRemove: function(e) {
				
			},
			beforeUpload: function(e) {
				
			},
			beforeEachUpload: function(form) {
				
			},
			afterEachUpload: function(data, status, idOfText) {
				
			},
			afterUpload: function(e) {
				
			}
		});
	});
</script>