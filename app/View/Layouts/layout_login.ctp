<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>	 
		<?php echo __('Betel RH')?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		//echo $this->Html->css('style'); 
		echo $this->Html->css('new');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->script('jquery-1.7'); 
		echo $this->Html->script('bootstrap'); 

		//echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?> 
	<meta charset="UTF-8" />
</head>
<body class="body">
  
<div id="container"> 
  <?php echo $content_for_layout ?>		
</div>
</body>
</html>
