<div class="acquirements view">
<h2><?php  echo __('Acquirement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($acquirement['Acquirement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Candidate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($acquirement['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $acquirement['Candidate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($acquirement['Acquirement']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Acquirement'), array('action' => 'edit', $acquirement['Acquirement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acquirement'), array('action' => 'delete', $acquirement['Acquirement']['id']), null, __('Are you sure you want to delete # %s?', $acquirement['Acquirement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acquirements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acquirement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
