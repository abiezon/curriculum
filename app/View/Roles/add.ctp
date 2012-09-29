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
			<!-- <input type="button" class="button" value="preview" /> -->
			<?php echo $this->Form->end(__('Submit'),array('class'=>'button')); ?>	
		</div>
	
</div>

<!-- <div class="roles form">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
		<legend><?php echo __('Add Role'); ?></legend>
	<?php
		echo $this->Form->input('role_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div> -->
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
