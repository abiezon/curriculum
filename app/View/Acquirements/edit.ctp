<div class="acquirements form">
<?php echo $this->Form->create('Acquirement'); ?>
	<fieldset>
		<legend><?php echo __('Edit Acquirement'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('candidate_id');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Acquirement.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Acquirement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Acquirements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
