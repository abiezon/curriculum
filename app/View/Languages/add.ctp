<?php $this->Html->addCrumb('Candidatos', '/candidates');?>
<?php $this->Html->addCrumb('Currículo', '/candidates/view/'.$idCandidate);?>
<?php $this->Html->addCrumb('Novo Idioma');?>
<!-- <div class="box"> -->
	<!-- Box Head -->
	<div id="content">
		<div class="box">	
	<div class="box-head">
		<h2><?php echo __('Add Language'); ?></h2>
	</div>
	<!-- End Box Head -->
	
	<!-- <form action="" method="post"> -->
	<?php echo $this->Form->create('Language'); ?>
		
		<!-- Form -->
		<div class="form">
		
			<?php
				echo $this->Form->input('candidate_id',array('disabled'=>false,'class'=>'field'));
				echo $this->Form->input('language',array('class'=>'field size1'));
				echo $this->Form->input('fluency',array('type'=>'select','options'=>array('Lê','Lê e Escreve','Lê, Escreve e Fala'),'class'=>'field'));
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
				
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>	
<!-- </div> -->




<!-- <div class="courses form">
<?php echo $this->Form->create('Course'); ?>
	<fieldset>
		<legend><?php echo __('Add Course'); ?></legend>
	<?php
		echo $this->Form->input('candidate_id',array('disabled'=>false));
		echo $this->Form->input('institution');
		echo $this->Form->input('duration');
		echo $this->Form->input('name_course');
	?>
	</fieldset>
	<p>&nbsp;</p>	
	<p class="actions"><?php echo $this->Html->link($continue == "" ?__('Leave') :__('Back'), array(
		'controller' => 'candidates',
		'action' => 'view',	$idCandidate
		)); ?> 
	</p>
<?php echo $this->Form->end($continue == "" ?__('Save and Continue'):__('Save')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<!-- <li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?></li> -->
		<!-- <li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li> -->
		<!-- <li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li> -->
	<!-- </ul>
	</div>  -->




<!-- <div class="languages form">
<?php echo $this->Form->create('Language'); ?>
	<fieldset>
		<legend><?php echo __('Add Language'); ?></legend>
	<?php
		echo $this->Form->input('candidate_id',array('disabled'=>false));
		echo $this->Form->input('language');
		echo $this->Form->input('fluency',array('type'=>'select','options'=>array('Lê','Lê e Escreve','Lê, Escreve e Fala')));
	?>
	</fieldset>
	<p>&nbsp;</p>	
	<p class="actions"><?php echo $this->Html->link(__('Leave'), array(
		'controller' => 'candidates',
		'action' => 'view',	$idCandidate
		)); ?> 
	</p>
<?php echo $this->Form->end(__('Save')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul> -->

		<!-- <li><?php echo $this->Html->link(__('List Languages'), array('action' => 'index')); ?></li> -->
	<!-- </ul>
</div> -->
