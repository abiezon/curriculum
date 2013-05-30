<?php $this->Html->addCrumb('Candidatos', '/candidates');?>
<?php $this->Html->addCrumb('Currículo', '/candidates/view/'.$idCandidate);?>
<?php $this->Html->addCrumb('Experiência');?> 
<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Experience'); ?></h2>
</div> 

<div class="description">
	<p class="title"><?php echo __('Candidate'); ?></p>
	<p><?php echo $this->Html->link($experience['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $experience['Candidate']['id'])); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('Nome da Empresa'); ?></p>
	<p><?php echo h($experience['Experience']['company_name']); ?> </p>
</div>
<div class="description">
	<p class="title"><?php echo __('Function'); ?></p>
	<p><?php echo h($experience['Experience']['function']); ?> </p>
</div>
<div class="description">
	<p class="title"><?php echo __('Time Worked'); ?></p>
	<p><?php echo h($experience['Experience']['time_worked']); ?> </p>
</div>
<div class="description">
	<p class="title"><?php echo __('Start Date'); ?></p>
	<p><?php echo h($experience['Experience']['start_date']); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('End Date'); ?></p>
	<p><?php echo h($experience['Experience']['end_date']); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('Current Job'); ?></p>
	<p><?php echo $this->Home->viewAtualWork(h($experience['Experience']['current_job'])); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('Job Description'); ?></p>
	<p><?php echo h($experience['Experience']['job_description']); ?></p>
</div>
<div class="buttons">
    <p class="back"><?php echo $this->Html->image("back_list.png",array('url'=>array('controller'=>'candidates','action'=>'view',$idCandidate),'title'=>'Voltar ao currículo','class'=>'btn-voltar'))?></p>
</div>


</div>
</div>
<div id="sidebar" class="actions">
	
	<!-- Box -->
	<div class="box">
		
		<!-- Box Head -->
		<div class="box-head">
			<h2><?php echo __('Menu')?></h2>
		</div>
		<!-- End Box Head-->
		
		<div class="box-content">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Experience'), array('action' => 'edit', $experience['Experience']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Experience'), array('action' => 'delete', $experience['Experience']['id']), null, __('Are you sure you want to delete # %s?', $experience['Experience']['id'])); ?> </li>
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

