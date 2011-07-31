<?php
	echo $html->script('jquery-1.4.4.min', false);
?>
<div class="galleries index">
	<h2><?php __('Galleries');?></h2>
	
	<?php foreach ($galleries as $gallery): ?>
		
		<?php echo $html->div('image_frame',
			$html->link(
				$html->image('/media/filter/medium/'.$gallery['Gallery']['dirname'].'/'.$gallery['Gallery']['basename']), 
					'/media/transfer/img/'.$gallery['Gallery']['basename'],
					array('rel' => 'prettyPhoto[gallery1]', 'escape' => false, 'title' => $gallery['Gallery']['basename']),
				null, false
			).
			$html->tag('div', 
				$gallery['Gallery']['basename']. '<span class="deleteText">[Delete]</span>', 
				array('class' => 'image_frame_info')
			),
			array('title' => $gallery['Gallery']['id'])
		); ?>
	
	<?php endforeach; ?>
	
	<div class="clear"></div>
	<br />

	<div class="paging">
		<?php echo $paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
		<?php echo $paginator->numbers(); ?>
		<?php echo $paginator->next('Next »', null, null, array('class' => 'disabled')); ?>
		<?php echo $paginator->counter(array(
			'format' => 'Page %page% of %pages%, Showing %current% records out of %count% total'
			));
		?>
	</div>

</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $html->link(__('Upload Images', true), array('action' => 'add')); ?></li>
	</ul>
</div>
<script type="text/javascript">
	$(function(){
		/*$('.image_frame').deleteImage({
			deleteUrl: '<?php echo $html->url(array('action' => 'delete')); ?>'
		});*/
		/*
		$("a[rel^='prettyPhoto']").prettyPhoto({
			theme: 'facebook'  light_rounded / dark_rounded / light_square / dark_square / facebook
		}); */	
	});
</script>