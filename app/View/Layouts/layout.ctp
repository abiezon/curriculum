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

		echo $this->Html->css('style');
		echo $this->Html->css('style2');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Betel</a></h1>			
			<div id="top-navigation">
				<?php echo __('Bem-vindo')?>&nbsp;<strong><?php echo $this->Session->read('Auth.User.username') ?></strong>	<span>|</span>				
				<?php
				echo $this->Html->link(__('editar perfil'),array(
				  'controller' => 'Users', 
				  'action' => 'edit',
				  $this->Session->read('Auth.User.id')
				  ))
				?>
				<span>|</span>
				<?php echo $this->Html->link(__('logout'),array('controller' => 'Users', 'action' => 'logout')) ?>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="#" ><span>Home</span></a></li>
			    <li><a href="#" class="active"><span>Candidato</span></a></li>
			    <li><a href="#"><span>Aba3</span></a></li>
			    <li><a href="#"><span>Aba4</span></a></li>
			    <li><a href="#"><span>Aba5</span></a></li>
			    <li><a href="#"><span>Aba6</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Dashboard</a>
			<span>&gt;</span>
			Current Articles
		</div>
		<!-- End Small Nav -->
		
		<!-- Messages-->
		<?php echo $this->Session->flash(); ?>	
		<!-- End Messages-->
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					
					<?php echo $this->fetch('content'); ?>
					
				</div>			

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<?php  echo $this->element("sidebar")?>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2012 - Betel</span>
		<span class="right">
			Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>