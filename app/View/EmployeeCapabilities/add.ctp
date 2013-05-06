<?php $this->Html->addCrumb('Capacitação', '/capabilities');?>
<?php $this->Html->addCrumb('Adicionar Curso');?>
<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Add Employee Capabilitie'); ?></h2>
</div>
<div class="form">
	
	<?php echo $this->Form->create('EmployeeCapabilitie'); ?>
		
		<?php
			echo $this->Form->input('employee_id',array('class'=>'field size1'));
			echo $this->Form->input('capacity_id',array('class'=>'field size1'));
		?>
		<div class="buttons">
            <input type="button" class="button" value="Cancelar" onclick="location.href='<?php echo $this->Html->url(array('controller' => 'employees', 'action' => 'view',$employeeId)); ?>';" />		
    		<?php echo $this->Form->button(__('Save'),array('class'=>'button')); ?>
    	</div> 
    	<?php echo $this->Form->end();?>
	
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

    		<li><?php echo $this->Html->link(__('List Employee Capabilities'), array('action' => 'index')); ?></li>
    		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
    		<li><?php echo $this->Html->link(__('List Capabilities'), array('controller' => 'capabilities', 'action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('New Capabilitie'), array('controller' => 'capabilities', 'action' => 'add')); ?> </li>
    	</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>


