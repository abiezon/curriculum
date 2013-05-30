<?php $this->Html->addCrumb('Capacitação', '/capabicities');?>
<?php $this->Html->addCrumb('Visualizar');?>
<div id="content">
	<div class="box">
<div class="box-head">
	<h2 class="left"><?php  echo __('Capacitação'); ?></h2>	
</div>
<div class="roles view">

	<div class="description">
		<p class="title"><?php echo __('Tipo da Capacitação'); ?></p>
		<p><?php echo $this->Html->link($capabilitie['CapabicityType']['name'], array('controller' => 'capabicity_types', 'action' => 'view', $capabilitie['CapabicityType']['id'])); ?></p> 
		
		<p class="title"><?php echo __('Nome da Capacitação'); ?></p>
		<p><?php echo h($capabilitie['Capabilitie']['name_capabicity']); ?></p> 
		
		<p class="title"><?php echo __('Institution'); ?></p>
		<p><?php echo h($capabilitie['Capabilitie']['institution']); ?></p>
		
		<p class="title"><?php echo __('Duration'); ?></p>
		<p><?php echo h($capabilitie['Capabilitie']['duration']); ?></p>
		
		<p class="title"><?php echo __('Data da Capacitação'); ?></p>
		<p><?php echo h($capabilitie['Capabilitie']['date_capabicity']); ?></p>
		
	</div> 
	<div class="related">
    	<h3><?php echo __('Inscritos na Capacitação'); ?></h3>
    	<?php if (!empty($capabilitie['Employee'])): ?>
    	<table cellpadding = "0" cellspacing = "0">
    	<tr>
    		<th><?php echo __('Id'); ?></th>
    		<th><?php echo __('Roles'); ?></th>
    		<th><?php echo __('Number Betel'); ?></th>
    		<th><?php echo __('Name'); ?></th>
            <!-- <th><?php echo __('Last Name'); ?></th> -->
    		<!-- <th><?php echo __('Street'); ?></th>
    		          <th><?php echo __('Street Number'); ?></th>
    		          <th><?php echo __('Phone'); ?></th>
    		          <th><?php echo __('Email'); ?></th>
    		          <th><?php echo __('Date Birth'); ?></th>
    		          <th><?php echo __('Rg'); ?></th>
    		          <th><?php echo __('Cpf'); ?></th>
    		          <th><?php echo __('Created'); ?></th>
    		          <th><?php echo __('Modified'); ?></th> -->
    		<th class="actions"><?php echo __('Actions'); ?></th>
    	</tr>
    	<?php
    		$i = 0;
    		foreach ($capabilitie['Employee'] as $employee): ?>
    		<tr>
    			<td><?php echo $employee['id']; ?></td>
    			<td><?php echo $this->Home->Role($employee['roles_id']); ?></td>
    			<td><?php echo $employee['number_betel']; ?></td>
    			<td><?php echo $employee['first_name'].' '.$employee['last_name']; ?></td>
    			
    			<!-- <td><?php echo $employee['street']; ?></td>
    			             <td><?php echo $employee['street_number']; ?></td>
    			             <td><?php echo $employee['phone']; ?></td>
    			             <td><?php echo $employee['email']; ?></td>
    			             <td><?php echo $employee['date_birth']; ?></td>
    			             <td><?php echo $employee['rg']; ?></td>
    			             <td><?php echo $employee['cpf']; ?></td>
    			             <td><?php echo $employee['created']; ?></td>
    			             <td><?php echo $employee['modified']; ?></td>  -->
    			<td class="actions">
    				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id']),array('class'=>'replace btn-ver')); ?>
    				
    				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), array('class'=>'replace btn-deletar'), __('Are you sure you want to delete # %s?', $employee['id'])); ?>
    			</td>
    		</tr>
    	<?php endforeach; ?>
    	</table>
    <?php endif; ?>

    	<div class="actions">
    		<ul>
    			<!--<li><?php echo $this->Html->link(__('Inscrever Novo'), array('controller' => 'capabilities', 'action' => 'enrollment',$capabilitie['Capabilitie']['id'])); ?> </li>-->
    		</ul>
    	</div>
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
        		<li><?php echo $this->Html->link(__('Editar Capacitação'), array('action' => 'edit', $capabilitie['Capabilitie']['id'])); ?> </li>
        		<li><?php echo $this->Form->postLink(__('Excluir Capacitação'), array('action' => 'delete', $capabilitie['Capabilitie']['id']), null, __('Are you sure you want to delete # %s?', $capabilitie['Capabilitie']['id'])); ?> </li>
        		<li><?php echo $this->Html->link(__('Listar Capacitação'), array('action' => 'index')); ?> </li>
        		<li><?php echo $this->Html->link(__('Nova Capacitação'), array('action' => 'add')); ?> </li>
        		
        		
        	</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div> 




