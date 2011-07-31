<?php
	echo $html->script('jquery-1.6.2.min', false);
	echo $html->script('jquery.fileUploader', false);
	echo $html->css('fileUploader', null, array(), false);
?>

<div class="galleries form">
	<h2><?php __('Upload Photo');?></h2>
	<?php
		echo $form->create('Gallery', array('type' => 'file'));
		echo $form->input('file', array('type' => 'file', 'label' => false, 'class' => 'imageUpload'));
		echo $form->end();
	?>
	<br />
	<input type="submit" value="Upload" id="pxUpload" disabled="disabled" />
	<input type="reset" value="Clear" id="pxClear" disabled="disabled" />
</div>

<script>
	$(function(){
		$('.imageUpload').fileUploader({
			imageLoader: '<?php echo $html->url('/img/image_upload.gif'); ?>',
			allowedExtension: 'jpg|jpeg|gif|png',
			limit: 5,
			callback: function(e) {
				console.log( $(e).contents().find("#message").text() );
			}
		});
	});
</script>