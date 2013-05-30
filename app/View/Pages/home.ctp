<?php echo $this->Session->flash(); ?>
<?php echo $this->Session->flash('auth'); ?>
<!-- <div class="index">
	<h2><?php echo __('Cadastro de Currículos'); ?></h2>	
</div> -->
<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Betel Center'); ?></h2>
</div>
<div class="roles view">

	
</div>
</div>
</div>
<div id="sidebar" class="actions">
	
	<!-- Box -->
	<div class="box">
		
		<!-- Box Head -->
		<div class="box-head">
			<h2><?php echo __('Menu')?></h2>
		</div>
		<!-- End Box Head-->
		
		<div class="box-content">
			<ul>

				<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Candidate'), array('controller'=>'candidates','action' => 'index')); ?></li>				
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>
