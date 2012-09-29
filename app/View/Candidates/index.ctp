<div class="box-head">
	<h2 class="left"><?php echo __('Candidates'); ?></h2>
	<div class="right">
		<?php
		        echo $this->Form->create('Candidate', array(
		            'url' => array_merge(array('action' => 'index'), $this->params['pass'])
		            ));
		        echo $this->Form->input('name', array('div' => false, 'empty' => true,'class'=>'field small-field')); // empty creates blank option.
		        echo $this->Form->submit(__('Search', true), array('div' => false,'class'=>'button'));
		        echo $this->Form->end();
		    ?>
	</div>
</div>


<div class="candidates index">
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('role_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('cpf'); ?></th>
						<th><?php echo $this->Paginator->sort('rg'); ?></th>
						<th><?php echo $this->Paginator->sort('street'); ?></th>
						<th><?php echo $this->Paginator->sort('street_number'); ?></th>
						<th><?php echo $this->Paginator->sort('complement'); ?></th> -->
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th> -->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($candidates as $candidate): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($candidate['Role']['role_name'], array('controller' => 'roles', 'action' => 'view', $candidate['Role']['id'])); ?>
		</td>
		<td><?php echo h($candidate['Candidate']['name']); ?>&nbsp;</td>
		<!-- <td><?php echo h($candidate['Candidate']['cpf']); ?>&nbsp;</td>
				<td><?php echo h($candidate['Candidate']['rg']); ?>&nbsp;</td>
				<td><?php echo h($candidate['Candidate']['street']); ?>&nbsp;</td>
				<td><?php echo h($candidate['Candidate']['street_number']); ?>&nbsp;</td>
				<td><?php echo h($candidate['Candidate']['complement']); ?>&nbsp;</td> -->
		<td><?php echo h($candidate['Candidate']['state']); ?>&nbsp;</td>
		<td><?php echo h($candidate['Candidate']['city']); ?>&nbsp;</td>
		<td><?php echo h($candidate['Candidate']['email']); ?>&nbsp;</td>
		<!-- <td><?php echo h($candidate['Candidate']['created']); ?>&nbsp;</td>
				<td><?php echo h($candidate['Candidate']['modified']); ?>&nbsp;</td> -->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $candidate['Candidate']['id']),array('class'=>'replace btn-ver')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $candidate['Candidate']['id']),array('class'=>'replace btn-editar')); ?>
			<?php echo $this->Form->postLink(__('Delete'),array('action' => 'delete', $candidate['Candidate']['id']), array('class'=>'replace btn-deletar'), __('Are you sure you want to delete # %s?', $candidate['Candidate']['name'])); ?>
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
		<li><?php echo $this->Html->link(__('New Candidate'), array('action' => 'add')); ?></li>
		<!-- <li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li> -->
		<!-- <li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li> -->
		<li><?php echo $this->Html->link(__('List Candidate'), array('action' => 'index')); ?></li>
		<!-- <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users','action'=>'logout')); ?></li> -->
		<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages','action'=>'home')); ?></li>
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
