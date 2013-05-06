<?php $this->Html->addCrumb('Candidatos', '/candidates');?>
<?php $this->Html->addCrumb('Currículo', '/candidates/view/'.$idCandidate);?>
<?php $this->Html->addCrumb('Editar Experiência');?>
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
	
	<div class="buttons">
        <input type="button" class="button" value="Cancelar" onclick="location.href='<?php echo $this->Html->url(array('controller' => 'candidates', 'action' => 'view',$idCandidate)); ?>';" />		
		<?php echo $this->Form->button(__('Save'),array('class'=>'button')); ?>
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

