<div class="index">
	<h2><?php echo __('Cadastro de Currículos'); ?></h2>
	
	
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<!-- <li><?php echo $this->Html->link(__('New Candidate'), array('action' => 'add')); ?></li> -->
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li> -->
		<li><?php echo $this->Html->link(__('List Candidate'), array('controller'=>'candidates','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users','action'=>'logout')); ?></li>
		<!-- <li><?php echo $this->Html->link(__('List Acquirements'), array('controller' => 'acquirements', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Acquirement'), array('controller' => 'acquirements', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li> -->
	</ul>
</div>
