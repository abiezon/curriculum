<div class="employeeCapabilities view">
<h2><?php  echo __('Employee Capabilitie'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeeCapabilitie['EmployeeCapabilitie']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeCapabilitie['Employee']['first_name'], array('controller' => 'employees', 'action' => 'view', $employeeCapabilitie['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capabilitie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeCapabilitie['Capabilitie']['name_capabicity'], array('controller' => 'capabilities', 'action' => 'view', $employeeCapabilitie['Capabilitie']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee Capabilitie'), array('action' => 'edit', $employeeCapabilitie['EmployeeCapabilitie']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee Capabilitie'), array('action' => 'delete', $employeeCapabilitie['EmployeeCapabilitie']['id']), null, __('Are you sure you want to delete # %s?', $employeeCapabilitie['EmployeeCapabilitie']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Capabilities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Capabilitie'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Capabilities'), array('controller' => 'capabilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Capabilitie'), array('controller' => 'capabilities', 'action' => 'add')); ?> </li>
	</ul>
</div>
