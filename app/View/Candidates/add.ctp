<?php echo $this->Html->script('jquery.maskedinput-1.3'); ?>
<?php $this->Html->addCrumb('Candidatos', '/candidates');?>
<?php $this->Html->addCrumb('Novo Currículo');?>
<div id="content">
	<div class="box">
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
				echo $this->Form->input('role_id',array('empty' => __('Selecione'),'selected'=>'','class'=>'field'));
				echo $this->Form->input('name',array('class'=>'field size1'));
				echo $this->Form->input('cpf',array('class'=>'field size3'));
				echo $this->Form->input('rg',array('class'=>'field size3'));
				echo $this->Form->input('gender',array('type'=>'select','options'=>$this->Home->getGender(),'class'=>'field'));
				echo $this->Form->input('date_birth',array('minYear' => date('Y')-70, 'maxYear' => date('Y')-16,'label'=>__("Data de Nascimento"),'dateFormat'=>'YMD','class'=>'inline-field field'));
				echo $this->Form->input('age',array('type'=> 'text','class'=>'field size2','maxlength' => 2,'label'=>'Idade')); 
				echo $this->Form->input('marital_status',array('type'=>'select','options'=>$this->Home->maritalStatus(),'class'=>'field','label'=>'Estado Civil'));
				echo $this->Form->input('cel_phone',array('type'=> 'text','class'=>'field size3','label'=>'Celular')); 
				echo $this->Form->input('phone',array('type'=> 'text','class'=>'field size3','label'=>'Telefone'));
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
            <input type="button" class="button" value="Cancelar" onclick="location.href='<?php echo $this->Html->url(array('controller' => 'candidates', 'action' => 'index')); ?>';" />		
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
				<li><?php echo $this->Html->link(__('List Candidate'), array('action' => 'index')); ?></li>				
				<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages','action'=>'home')); ?></li>				
			</ul>				
			<div class="cl">&nbsp;</div>			

		</div>
	</div>
	<!-- End Box -->
</div>
<script type="text/javascript">
    jQuery(document).ready(function($){        
       
        $("#CandidatePhone").mask("(99)9999-9999");
        $("#CandidateCelPhone").mask("(99)9999-9999");        
        
    });
</script>	



