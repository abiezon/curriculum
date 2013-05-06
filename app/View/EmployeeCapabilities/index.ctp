<?php $this->Html->addCrumb('Capacitação','/capabilities');?> 
<?php $this->Html->addCrumb('Listagem de Cursos');?>
<div id="content">
	<div class="box">
<div class="box-head">
	<h2 class="left"><?php echo __('Listagem de Cursos'); ?></h2>	
</div>

<div class="roles index">
	<!-- <h2><?php echo __('Roles'); ?></h2> -->
	<table cellpadding="0" cellspacing="0">
	  <tr>  			
  			<th><?php echo $this->Paginator->sort('employee_id','Empregado(s)'); ?></th>
  			<th><?php echo $this->Paginator->sort('capacity_id','Curso(s)'); ?></th>
  			<th class="actions"><?php echo __('Apagar'); ?></th>
  	</tr>
	<?php
	foreach ($employeeCapabilities as $employeeCapabilitie): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($employeeCapabilitie['Employee']['first_name'], array('controller' => 'employees', 'action' => 'view', $employeeCapabilitie['Employee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employeeCapabilitie['Capabilitie']['name_capabicity'], array('controller' => 'capabilities', 'action' => 'view', $employeeCapabilitie['Capabilitie']['id'])); ?>
		</td>
		<td class="actions">
			
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employeeCapabilitie['EmployeeCapabilitie']['id']), array('class'=>'replace btn-deletar'), __('Are you sure you want to delete # %s?', $employeeCapabilitie['EmployeeCapabilitie']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
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
    		
    		<li><?php echo $this->Html->link(__('Listar Empregados'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
    		
    		<li><?php echo $this->Html->link(__('Lista Capacitações'), array('controller' => 'capabilities', 'action' => 'index')); ?> </li>
    		
    	</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>
