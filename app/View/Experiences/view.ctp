<div class="experiences view">
<h2><?php  echo __('Experience'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Candidate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experience['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $experience['Candidate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Function'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['function']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Worked'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['time_worked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Current Job'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['current_job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Description'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['job_description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Experience'), array('action' => 'edit', $experience['Experience']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Experience'), array('action' => 'delete', $experience['Experience']['id']), null, __('Are you sure you want to delete # %s?', $experience['Experience']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
