<!-- <div class="box"> -->
	<!-- Box Head -->
	<div class="box-head">
		<h2><?php echo __('Add Candidate'); ?></h2>
	</div>
	<!-- End Box Head -->
	
	<!-- <form action="" method="post"> -->
	<?php echo $this->Form->create('Candidate'); ?>	
		
		<!-- Form -->
		<div class="form">
				
			<?php
				echo $this->Form->input('role_id',array('selected'=>'','class'=>'field'));
				echo $this->Form->input('name',array('class'=>'field size1'));
				echo $this->Form->input('cpf',array('class'=>'field size3'));
				echo $this->Form->input('rg',array('class'=>'field size3'));
				echo $this->Form->input('gender',array('type'=>'select','options'=>$this->Home->getGender(),'class'=>'field'));
				echo $this->Form->input('date_birth',array('minYear' => date('Y')-70, 'maxYear' => date('Y')-18,'label'=>__("Data de Nascimento"),'dateFormat'=>'YMD','class'=>'field'));
				echo $this->Form->input('schooling',array('type'=>'select','options'=>$this->Home->getSchooling(),'class'=>'field'));
				echo $this->Form->input('street',array('class'=>'field size1'));
				echo $this->Form->input('street_number',array('type'=>'text','class'=>'field size2'));
				echo $this->Form->input('complement',array('class'=>'field size1'));
				echo $this->Form->input('state',array('type'=>"select","options"=>$this->Home->getStates(),'class'=>'field'));
				echo $this->Form->input('city',array('class'=>'field size1'));
				echo $this->Form->input('email',array('class'=>'field size1'));
				// echo $this->Form->input('Acquirement.0.description');
			?>
		</div>
		<!-- End Form -->
		
		<!-- Form Buttons -->
		<div class="buttons">
			<!-- <input type="button" class="button" value="preview" /> -->
			<?php echo $this->Form->submit(__('Save'),array('class'=>'button')); ?>
		</div>
		<!-- End Form Buttons -->
	</form>
<!-- </div> -->


