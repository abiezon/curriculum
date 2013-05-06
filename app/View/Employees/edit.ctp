<?php echo $this->Html->script('jquery.maskedinput-1.3'); ?>
<?php $this->Html->addCrumb('Funcionários', '/funcionario');?>
<?php $this->Html->addCrumb('Editar Funcionário');?>
<div id="content">
	<div class="box">
<!-- <div class="box"> -->
	<!-- Box Head -->
	<div class="box-head">
		<h2><?php echo __('Edit Employee'); ?></h2>
	</div>
	<!-- End Box Head -->
	
	<!-- <form action="" method="post"> -->
	<?php echo $this->Form->create('Employee'); ?>	
		
		<!-- Form -->
		<div class="form"> 
		  
		  <?php  
		    echo $this->Form->input('id');     		
     	  echo $this->Form->input('roles_id',array('empty' => __('Selecione'),'class'=>'field','label'=>'Função'));
     		echo $this->Form->input('number_betel',array('class'=>'field size2','type'=>"text"));
     		echo $this->Form->input('first_name',array('class'=>'field size1','label'=>"Nome"));
     		echo $this->Form->input('last_name',array('class'=>'field size1','label'=>'Sobrenome'));
     		echo $this->Form->input('rg',array('class'=>'field size3'));
     		echo $this->Form->input('cpf',array('class'=>'field size3'));
     		echo $this->Form->input('date_birth',array('minYear' => date('Y')-70, 'maxYear' => date('Y')-16,'label'=>__("Data de Nascimento"),'dateFormat'=>'YMD','class'=>'inline-field field'));            
     		echo $this->Form->input('marital_status',array('type'=>'select','options'=>$this->Home->maritalStatus(),'class'=>'field','label'=>'Estado Civil'));
     		echo $this->Form->input('street',array('class'=>'field size1'));
     		echo $this->Form->input('street_number',array('class'=>'field size2','type'=>'text'));
     		echo $this->Form->input('cell_phone',array('class'=>'field size3','label'=>"Celular"));  
     		echo $this->Form->input('phone',array('class'=>'field size3','label'=>"Telefone"));
     		echo $this->Form->input('email',array('class'=>'field size1'));
     		
     		
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

     		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employee.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employee.id'))); ?></li>
     		<li><?php echo $this->Html->link(__('Listar Funcionários'), array('action' => 'index')); ?></li>
     		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>     		
     		<li><?php echo $this->Html->link(__('Listar Capacitações'), array('controller' => 'employee_capabilities', 'action' => 'index',$employee_id)); ?> </li>     		
     	</ul>				
			<div class="cl">&nbsp;</div>			

		</div>
	</div>
	<!-- End Box -->
</div>
<script type="text/javascript">
    jQuery(document).ready(function($){        
       
        $("#EmployeePhone").mask("(99)9999-9999");
         $("#EmployeeCellPhone").mask("(99)9999-9999");    
        
        
    });
</script>
