<div class="employeeCapabilities form">
<?php echo $this->Form->create('EmployeeCapabilitie'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employee Capabilitie'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('capacity_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmployeeCapabilitie.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EmployeeCapabilitie.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employee Capabilities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Capabilities'), array('controller' => 'capabilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Capabilitie'), array('controller' => 'capabilities', 'action' => 'add')); ?> </li>
	</ul>
</div>
