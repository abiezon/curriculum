<div class="roles view">
<h2><?php  echo __('Role'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($role['Role']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role Name'); ?></dt>
		<dd>
			<?php echo h($role['Role']['role_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']), null, __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Candidates'); ?></h3>
	<?php if (!empty($role['Candidate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Cpf'); ?></th>
		<th><?php echo __('Rg'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('Street Number'); ?></th>
		<th><?php echo __('Complement'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($role['Candidate'] as $candidate): ?>
		<tr>
			<td><?php echo $candidate['id']; ?></td>
			<td><?php echo $candidate['role_id']; ?></td>
			<td><?php echo $candidate['name']; ?></td>
			<td><?php echo $candidate['cpf']; ?></td>
			<td><?php echo $candidate['rg']; ?></td>
			<td><?php echo $candidate['street']; ?></td>
			<td><?php echo $candidate['street_number']; ?></td>
			<td><?php echo $candidate['complement']; ?></td>
			<td><?php echo $candidate['state']; ?></td>
			<td><?php echo $candidate['city']; ?></td>
			<td><?php echo $candidate['email']; ?></td>
			<td><?php echo $candidate['created']; ?></td>
			<td><?php echo $candidate['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'candidates', 'action' => 'view', $candidate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'candidates', 'action' => 'edit', $candidate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'candidates', 'action' => 'delete', $candidate['id']), null, __('Are you sure you want to delete # %s?', $candidate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
