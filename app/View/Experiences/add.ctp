<?php $this->Html->addCrumb('Candidatos', '/candidates');?>
<?php $this->Html->addCrumb('Currículo', '/candidates/view/'.$idCandidate);?>
<?php $this->Html->addCrumb('Nova Experiência');?>
<div id="content">
	<div class="box">
<!-- <div class="box"> -->
	<!-- Box Head -->
	<div class="box-head">
		<h2><?php echo __('Add Experience'); ?></h2>
	</div>
	<!-- End Box Head -->
	
	<!-- <form action="" method="post"> -->
	<?php echo $this->Form->create('Experience'); ?>
		
		<!-- Form -->
		<div class="form">
				
			<?php
				echo $this->Form->input('candidate_id',array('disabled'=>false,'class'=>'field'));
				echo $this->Form->input('company_name',array('class'=>'field size1','label'=>'Nome da Empresa'));
				echo $this->Form->input('function',array('class'=>'field size1'));
				echo $this->Form->input('time_worked',array('class'=>'field size2'));
				echo $this->Form->input('current_job',array('type'=>'checkbox','class'=>'checkbox'));
				echo $this->Form->input('start_date',array('minYear' => date('Y')-40, 'maxYear' => date('Y'),'class'=>'field'));
				echo $this->Form->input('end_date',array('minYear' => date('Y')-40, 'maxYear' => date('Y'),'class'=>'field'));		
				echo $this->Form->input('job_description',array('class'=>'field size1'));
			?>
		</div>
		<!-- End Form -->
		
		<!-- Form Buttons -->
		<div class="buttons">
            <input type="button" class="button" value="Cancelar" onclick="location.href='<?php echo $this->Html->url(array('controller' => 'candidates', 'action' => 'view',$idCandidate)); ?>';" />		
    		<?php echo $this->Form->button(__('Save'),array('class'=>'button')); ?>
    	</div>
		<!-- End Form Buttons -->
	</form>
<!-- </div> -->


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
				<!-- <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Acquirement.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Acquirement.id'))); ?></li> -->
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

<!-- <div class="experiences form">
<?php echo $this->Form->create('Experience'); ?>
	<fieldset>
		<legend><?php echo __('Add Experience'); ?></legend>
	<?php
		echo $this->Form->input('candidate_id',array('disabled'=>false));
		echo $this->Form->input('company_name');
		echo $this->Form->input('function');
		echo $this->Form->input('time_worked');
		echo $this->Form->input('current_job',array('type'=>'checkbox'));
		echo $this->Form->input('start_date',array('minYear' => date('Y')-40, 'maxYear' => date('Y')));
		echo $this->Form->input('end_date',array('minYear' => date('Y')-40, 'maxYear' => date('Y')));		
		echo $this->Form->input('job_description');
	?>
	</fieldset>
	<p>&nbsp;</p>	
	<p class="actions"><?php echo $this->Html->link($continue == "" ?__('Leave') :__('Back'), array(
		'controller' => 'candidates',
		'action' => 'view',
		$idCandidate
		)); ?> 
	</p>
<?php echo $this->Form->end($continue == "" ?__('Save and Continue'):__('Save')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<!-- <li><?php echo $this->Html->link(__('List Experiences'), array('action' => 'index')); ?></li> -->
		<!-- <li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li> -->
		<!-- <li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li> -->
	<!-- </ul>
</div> -->
