<div class="candidates view">
<h2><?php  echo __('Candidate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidate['Role']['role_name'], array('controller' => 'roles', 'action' => 'view', $candidate['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['name']); ?>
			&nbsp;
		</dd>		
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date of birth'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['date_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schooling'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['schooling']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Number'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['street_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complement'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['complement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['city']); ?>
			&nbsp;
		</dd>		
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($candidate['Candidate']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidate'), array('action' => 'edit', $candidate['Candidate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Candidate'), array('action' => 'delete', $candidate['Candidate']['id']), null, __('Are you sure you want to delete # %s?', $candidate['Candidate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate'), array('action' => 'add')); ?> </li>
		
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Acquirements'); ?></h3>
	<?php if (!empty($candidate['Acquirement'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>				
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidate['Acquirement'] as $acquirement): ?>
		<tr>						
			<td><?php echo $acquirement['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'acquirements', 'action' => 'view', $acquirement['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'acquirements', 'action' => 'edit', $acquirement['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'acquirements', 'action' => 'delete', $acquirement['id']), null, __('Are you sure you want to delete # %s?', $acquirement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Acquirement'), array('controller' => 'acquirements', 'action' => 'add','continue')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Experiences'); ?></h3>
	<?php if (!empty($candidate['Experience'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>				
		<th><?php echo __('Function'); ?></th>
		<th><?php echo __('Time Worked'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Current Job'); ?></th>
		<th><?php echo __('Job Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidate['Experience'] as $experience): ?>
		<tr>						
			<td><?php echo $experience['function']; ?></td>
			<td><?php echo $experience['time_worked']; ?></td>
			<td><?php echo $experience['start_date']; ?></td>
			<td><?php echo $experience['end_date']; ?></td>
			<td><?php echo $experience['current_job']; ?></td>
			<td><?php echo $experience['job_description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'experiences', 'action' => 'view', $experience['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'experiences', 'action' => 'edit', $experience['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'experiences', 'action' => 'delete', $experience['id']), null, __('Are you sure you want to delete # %s?', $experience['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add','continue')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($candidate['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>				
		<th><?php echo __('Institution'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Name of Course'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidate['Course'] as $course): ?>
		<tr>						
			<td><?php echo $course['institution']; ?></td>
			<td><?php echo $course['duration']; ?></td>
			<td><?php echo $course['name_course']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), null, __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add','continue')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Languages'); ?></h3>
	<?php if (!empty($candidate['Language'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>				
		<th><?php echo __('Language'); ?></th>
		<th><?php echo __('Fluency'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidate['Language'] as $language): ?>
		<tr>					
			<td><?php echo $language['language']; ?></td>
			<td><?php echo $language['fluency']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'languages', 'action' => 'view', $language['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'languages', 'action' => 'edit', $language['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'languages', 'action' => 'delete', $language['id']), null, __('Are you sure you want to delete # %s?', $language['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
