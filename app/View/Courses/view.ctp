<?php $this->Html->addCrumb('Candidatos', '/candidates');?>
<?php $this->Html->addCrumb('Currículo', '/candidates/view/'.$idCandidate);?>
<?php $this->Html->addCrumb('Curso');?>
<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Course'); ?></h2>
</div> 

<div class="description">
	<p class="title"><?php echo __('Candidate'); ?></p>
	<p><?php echo $this->Html->link($course['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $course['Candidate']['id'])); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('Institution'); ?></p>
	<p><?php echo h($course['Course']['institution']); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('Duration'); ?></p>
	<p><?php echo h($course['Course']['duration']); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('Name Course'); ?></p>
	<p><?php echo h($course['Course']['name_course']); ?></p>
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
				<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

	

