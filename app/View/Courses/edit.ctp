<div id="content">
	<div class="box">
<!-- <div class="box"> -->
	<!-- Box Head -->
	<div class="box-head">
		<h2><?php echo __('Edit Course'); ?></h2>
	</div>
	<!-- End Box Head -->
	
	<!-- <form action="" method="post"> -->
	<?php echo $this->Form->create('Course'); ?>
		
		<!-- Form -->
		<div class="form">
			<?php
			    echo $this->Form->input('id');
				echo $this->Form->input('candidate_id',array('disabled'=>true,'class'=>'field'));
				echo $this->Form->input('institution',array('class'=>'field size1'));
				echo $this->Form->input('duration',array('class'=>'field size3','type'=>'text'));
				echo $this->Form->input('name_course',array('class'=>'field size1'));
			?>			
		</div>
		<!-- End Form -->
		<p class="actions"><?php echo $this->Html->link(__('Back'), array(
    		'controller' => 'candidates',
    		'action' => 'view',	$idCandidate
    		)); ?> 
    	</p>
		<!-- Form Buttons -->
		<div class="buttons">
			<!-- <input type="button" class="button" value="preview" /> -->
			<?php echo $this->Form->end(__('Save')); ?>
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
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Course.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Course.id'))); ?></li>
			</ul>
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div> 