<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php // echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body id="container">
<div id="container">
	<div id="header">
		<!-- <h1><a class="replace" href="#"></a></h1> -->
		<h2>Cadastro de Currículos - Betel</h2>
	</div><!-- header -->
	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Session->flash(); ?>
	<div id="content-wrap">		
		<div id="login-wrap">
                    
                    <?php echo $content_for_layout ?>
		</div><!-- login -->	
	</div><!-- content-wrap -->
</div>
</body>
</html>
