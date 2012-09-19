<div class="acquirements index">
	<h2><?php echo __('Acquirements'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('candidate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($acquirements as $acquirement): ?>
	<tr>
		<td><?php echo h($acquirement['Acquirement']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($acquirement['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $acquirement['Candidate']['id'])); ?>
		</td>
		<td><?php echo h($acquirement['Acquirement']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $acquirement['Acquirement']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $acquirement['Acquirement']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $acquirement['Acquirement']['id']), null, __('Are you sure you want to delete # %s?', $acquirement['Acquirement']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Acquirement'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
