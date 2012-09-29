<!-- <div class="candidates view"> -->
	
	<div class="box-head">
		<h2><?php echo __('Candidate'); ?></h2>
	</div>	
	
	
	
	
<!-- <h2><?php  echo __('Candidate'); ?></h2> -->
	<div class="description">
		<p class="title"><?php echo __('Role'); ?></p>
		<p><?php echo $this->Html->link($candidate['Role']['role_name'], array('controller' => 'roles', 'action' => 'view', $candidate['Role']['id'])); ?></p>
	</div>
	<div class="description">		
		<p class="title"><?php echo __('Dados Pessoais')?></p>
		<p><span><?php echo __('Name'); ?>:&nbsp;</span><?php echo h($candidate['Candidate']['name']); ?></p>
		<p><span><?php echo __('Gender'); ?>:&nbsp;</span><?php echo $this->Home->viewGender(h($candidate['Candidate']['gender'])); ?></p>
		<p><span><?php echo __('Date of birth'); ?>:&nbsp;</span><?php echo h($candidate['Candidate']['date_birth']); ?><p>
		<p><span><?php echo __('Email'); ?>:&nbsp;</span><?php echo h($candidate['Candidate']['email']); ?></p>
		<p><span><?php echo __('Schooling'); ?>:&nbsp;</span><?php echo $this->Home->viewSchooling(h($candidate['Candidate']['schooling'])); ?></p>
		<p><span><?php echo __('Rg'); ?>:&nbsp;</span><?php echo h($candidate['Candidate']['rg']); ?></p>
		<p><span><?php echo __('Cpf'); ?>:&nbsp;</span><?php echo h($candidate['Candidate']['cpf']); ?></p>
	</div>
	
	<div class="description">
		<p class="title"><?php echo __('Endereço')?></p>
		<p><span><?php echo __('Street'); ?>:&nbsp;</span><?php echo h($candidate['Candidate']['street']); ?></p>
		<p><span><?php echo __('Street Number'); ?>:&nbsp;</span><?php echo h($candidate['Candidate']['street_number']); ?></p>
		<p><span><?php echo __('Complement'); ?>:&nbsp;</span><?php echo h($candidate['Candidate']['date_birth']); ?><p>
		<p><span><?php echo __('State'); ?>:&nbsp;</span><?php echo h($candidate['Candidate']['state']); ?></p>
		<p><span><?php echo __('City'); ?>:&nbsp;</span><?php echo h($candidate['Candidate']['city']); ?></p>		
	</div>
	<div class="description">
		<p class="title"><?php echo __('Created'); ?></p>
		<p><?php echo h($candidate['Candidate']['created']); ?></p>				
	</div>	
<!-- </div> -->
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidate'), array('action' => 'edit', $candidate['Candidate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Candidate'), array('action' => 'delete', $candidate['Candidate']['id']), null, __('Are you sure you want to delete # %s?', $candidate['Candidate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('action' => 'index')); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('New Candidate'), array('action' => 'add')); ?> </li> -->
		
	<!-- </ul>
</div> -->

<div class="related">
	<h3><?php echo __('Related Experiences'); ?></h3>
	<?php if (!empty($candidate['Experience'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>				
		<th><?php echo __('Function'); ?></th>
		<th><?php echo __('Time Worked'); ?></th>
		<!-- <th><?php echo __('Start Date'); ?></th> -->
		<!-- <th><?php echo __('End Date'); ?></th> -->
		<th><?php echo __('Current Job'); ?></th>
		<!-- <th><?php echo __('Job Description'); ?></th> -->
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidate['Experience'] as $experience): ?>
		<tr>						
			<td><?php echo $experience['function']; ?></td>
			<td><?php echo $experience['time_worked']; ?></td>
			<!-- <td><?php echo $experience['start_date']; ?></td> -->
			<!-- <td><?php echo $experience['end_date']; ?></td> -->
			<td><?php echo $experience['current_job']; ?></td>
			<!-- <td><?php echo $experience['job_description']; ?></td> -->
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'experiences', 'action' => 'view', $experience['id']),array('class'=>'replace btn-ver')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'experiences', 'action' => 'edit', $experience['id']),array('class'=>'replace btn-editar')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'experiences', 'action' => 'delete', $experience['id']), array('class'=>'replace btn-deletar'), __('Are you sure you want to delete # %s?', $experience['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions new-right">
		<p><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add','continue'),array('class'=>'replace btn-add','title'=>__('New Experience'))); ?> </p>
	</div>
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
			<td><?php echo $this->Text->truncate($acquirement['description'], 150, array('ellipsis'=>'...','exact'=> false)); ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'acquirements', 'action' => 'view', $acquirement['id']),array('class'=>'replace btn-ver')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'acquirements', 'action' => 'edit', $acquirement['id']),array('class'=>'replace btn-editar')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'acquirements', 'action' => 'delete', $acquirement['id']), array('class'=>'replace btn-deletar'), __('Are you sure you want to delete # %s?', $acquirement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions new-right">
		<p><?php echo $this->Html->link(__('New Acquirement'), array('controller' => 'acquirements', 'action' => 'add','continue'),array('class'=>'replace btn-add','title'=>__('New Acquirement'))); ?></p> 
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
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id']),array('class'=>'replace btn-ver')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id']),array('class'=>'replace btn-editar')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), array('class'=>'replace btn-deletar'), __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions new-right">
		<p><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add','continue'),array('class'=>'replace btn-add','title'=>__('New Course'))); ?> </p>
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
				<?php echo $this->Html->link(__('View'), array('controller' => 'languages', 'action' => 'view', $language['id']),array('class'=>'replace btn-ver')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'languages', 'action' => 'edit', $language['id']),array('class'=>'replace btn-editar')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'languages', 'action' => 'delete', $language['id']), array('class'=>'replace btn-deletar'), __('Are you sure you want to delete # %s?', $language['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions new-right">
		<p><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add'),array('class'=>'replace btn-add','title'=>__('New Language'))); ?> </p>
	</div>
</div>

