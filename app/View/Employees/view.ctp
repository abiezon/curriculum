<?php $this->Html->addCrumb('Funcionários', '/funcionario');?>
<?php $this->Html->addCrumb('Visualizar');?>

<div id="content">
  <!-- Box View-->
	<div class="box">	                                        
    <div class="box-head">
    	<h2><?php echo __('Funcionário'); ?></h2>
    </div>
    <div class="description">
      <p class="title"><?php echo __('Role'); ?></p>
    	<p><?php echo $this->Html->link($employee['Role']['role_name'], array('controller' => 'roles', 'action' => 'view', $employee['Role']['id'])); ?></p>
    </div>
    <div class="description">
      <p class="title"><?php echo __('Dados Pessoais'); ?></p>
    	<p><span><?php echo __('Número Betel'); ?>:&nbsp;</span><?php echo h($employee['Employee']['number_betel']); ?></p> 
    	<p><span><?php echo __('Nome'); ?>:&nbsp;</span><?php echo h($employee['Employee']['first_name']).' '.h($employee['Employee']['last_name']); ?></p>
    	<p><span><?php echo __('RG'); ?>:&nbsp;</span><?php echo h($employee['Employee']['rg']); ?></p>
    	<p><span><?php echo __('CPF'); ?>:&nbsp;</span><?php echo h($employee['Employee']['cpf']); ?></p>
    	<p><span><?php echo __('Estado Civil'); ?>:&nbsp;</span><?php echo $this->Home->MaritalStatus(h($employee['Employee']['marital_status'])); ?></p>       
    	<p><span><?php echo __('Endereço'); ?>:&nbsp;</span><?php echo h($employee['Employee']['street']); ?></p>
    	<p><span><?php echo __('Street Number'); ?>:&nbsp;</span><?php echo h($employee['Employee']['street_number']); ?></p>
    	<p><span><?php echo __('Celular'); ?>:&nbsp;</span><?php echo h($employee['Employee']['cell_phone']); ?></p>
    	<p><span><?php echo __('Telefone'); ?>:&nbsp;</span><?php echo h($employee['Employee']['phone']); ?></p>
    	<p><span><?php echo __('Email'); ?>:&nbsp;</span><?php echo h($employee['Employee']['email']); ?></p>
    	<p><span><?php echo __('Data de Nascimento'); ?>:&nbsp;</span><?php echo h($employee['Employee']['date_birth']); ?></p>
    	
    </div>	
    <div class="description">
      <p class="title"><?php echo __('Created'); ?></p>
    	<p><?php echo h($employee['Employee']['created']); ?></p>
    </div>
    
    <!-- Capacitação Funcionario--> 
    <div class="related">
    	<h3><?php echo __('Capacitações Realizadas'); ?></h3>
    	<?php if (!empty($employee['EmployeeCapabilitie'])): ?>
    	<table cellpadding = "0" cellspacing = "0">
    	<tr>
    	  <th class="first"><?php echo __('Capacitação'); ?></th>
    		<th class="actions"><?php echo __('Actions'); ?></th>
    	</tr>
    	<?php
    		$i = 0;
    		foreach ($employee['EmployeeCapabilitie'] as $employeeCapabilitie): ?>
    		<tr>    			
    			<td class="first"><?php echo $this->Home->viewNameCapabicity($employeeCapabilitie['capacity_id']); ?></td>
    			<td class="actions">
    				<?php echo $this->Html->link(__('View'), array('controller' => 'capabilities', 'action' => 'view', $employeeCapabilitie['capacity_id']),array('class'=>'replace btn-ver')); ?>
    				
    				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employee_capabilities', 'action' => 'delete', $employeeCapabilitie['id']), array('class'=>'replace btn-deletar'), __('Are you sure you want to delete # %s?', $employeeCapabilitie['id'])); ?>
    			</td>
    		</tr>
    	<?php endforeach; ?>
    	</table>
    <?php endif; ?>

    	  <div class="actions">
      		<ul>
      			<li><?php echo $this->Html->link(__('Nova Capacitação'), array('controller' => 'employee_capabilities', 'action' => 'add',$employee['Employee']['id']),array('class'=>'first bt-add')); ?> </li>
      		</ul>
      	</div>
    </div>
    <!-- Fim Capacitação Funcionario-->
 </div>
 <!-- Fim Box View-->
</div>
 <!-- Fim Content-->   
 <!-- Menu lateral--> 
    <div id="sidebar" class="actions">
    	<!-- Box -->
    	<div class="box">
		
    		<!-- Box Head -->
    		<div class="box-head">
    			<h2><?php echo __('Menu')?></h2>
    		</div>
    		<!-- End Box Head-->
		
    		<div class="box-content">
							
    		<div class="cl">&nbsp;</div>			
    			  <ul>
        		<li><?php echo $this->Html->link(__('Editar Funcionário'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
        		<li><?php echo $this->Form->postLink(__('Excluir Funcionário'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
        		<li><?php echo $this->Html->link(__('Listar Funcionários'), array('action' => 'index')); ?> </li>
        		<li><?php echo $this->Html->link(__('Novo Funcionário'), array('action' => 'add')); ?> </li>
        		        		
        	</ul>
    		</div>
    	</div>
    	<!-- End Box -->
    </div>
 <!-- Fim Menu lateral-->        
