<!-- <div class="box"> -->
	<!-- Box Head -->
	<div class="box-head">
		<h2><?php echo __('Add Course'); ?></h2>
	</div>
	<!-- End Box Head -->
	
	<!-- <form action="" method="post"> -->
	<?php echo $this->Form->create('Course'); ?>
		
		<!-- Form -->
		<div class="form">
			<?php
				echo $this->Form->input('candidate_id',array('disabled'=>false,'class'=>'field'));
				echo $this->Form->input('institution',array('class'=>'field size1'));
				echo $this->Form->input('duration',array('class'=>'field'));
				echo $this->Form->input('name_course',array('class'=>'field size1'));
			?>			
		</div>
		<!-- End Form -->
		
		<!-- Form Buttons -->
		<div class="buttons">
			<!-- <input type="button" class="button" value="preview" /> -->
			<?php echo $this->Form->submit(__('Save and Continue'),array('class'=>'button')); ?>
		</div>
		<!-- End Form Buttons -->
	</form>
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
