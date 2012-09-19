<div class="acquirements form">
<?php echo $this->Form->create('Acquirement'); ?>
	<fieldset>
		<legend><?php echo __('Add Acquirement'); ?></legend>
	<?php
		echo $this->Form->input('candidate_id');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end($continue == "" ?__('Save and Continue'):__('Save')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Acquirements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
