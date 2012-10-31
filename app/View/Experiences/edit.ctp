<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Edit Experience'); ?></h2>
</div>


<div class="form">
	<?php echo $this->Form->create('Experience'); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('candidate_id',array('disabled'=>true,'class'=>'field'));
		echo $this->Form->input('company_name',array('class'=>'field size1','label'=>'Nome da Empresa'));
		echo $this->Form->input('function',array('class'=>'field size1'));
		echo $this->Form->input('time_worked',array('class'=>'field size1'));
		echo $this->Form->input('current_job',array('type'=>'checkbox','class'=>'field'));
		echo $this->Form->input('start_date',array('minYear' => date('Y')-40, 'maxYear' => date('Y'),'class'=>'field'));
		echo $this->Form->input('end_date',array('minYear' => date('Y')-40, 'maxYear' => date('Y'),'class'=>'field'));		
		echo $this->Form->input('job_description',array('class'=>'field size1'));
	?>
	
	<p>&nbsp;</p>	
	<p class="actions"><?php echo $this->Html->link(__('Back'), array(
		'controller' => 'candidates',
		'action' => 'view',
		$idCandidate
		)); ?> 
	</p>
	<div class="buttons">
		<!-- <input type="button" class="button" value="preview" /> -->
		<?php echo $this->Form->end(__('Save')); ?>
	</div>

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
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Experience.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Experience.id'))); ?></li>
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

