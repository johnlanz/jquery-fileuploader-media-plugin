<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax File Upload</title>
<?php
	echo $this->Html->css('default');
	echo $scripts_for_layout;
?>
</head>
<body>
	<div id="main_container">
		<?php 
			echo $session->flash();
			echo $content_for_layout; 
		?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>