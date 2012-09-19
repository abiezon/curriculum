<div class="candidates form">
<?php echo $this->Form->create('Candidate'); ?>
	<fieldset>
		<legend><?php echo __('Edit Candidate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('role_id');
		echo $this->Form->input('name');
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('gender');
		echo $this->Form->input('date_birth');
		echo $this->Form->input('schooling');
		echo $this->Form->input('street');
		echo $this->Form->input('street_number');
		echo $this->Form->input('complement');
		echo $this->Form->input('state');
		echo $this->Form->input('city');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Candidate.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Candidate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acquirements'), array('controller' => 'acquirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acquirement'), array('controller' => 'acquirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>
