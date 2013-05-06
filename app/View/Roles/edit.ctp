<?php $this->Html->addCrumb('Função', '/roles');?>
<?php $this->Html->addCrumb('Editar Função');?>
<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Edit Role'); ?></h2>
</div>
<div class="form">
	
	<?php echo $this->Form->create('Role'); ?>
		
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('role_name',array('class'=>'field size1'));
		?>
		
		<div class="buttons">
            <input type="button" class="button" value="Cancelar" onclick="location.href='<?php echo $this->Html->url(array('controller' => 'roles', 'action' => 'index')); ?>';" />		
    		<?php echo $this->Form->button(__('Save'),array('class'=>'button')); ?>
    	</div>
    	 <?php echo $this->Form->end();?>
	
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
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Role.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Role.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>								
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>
 

