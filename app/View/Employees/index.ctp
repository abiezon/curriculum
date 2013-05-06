<?php $this->Html->addCrumb('Funcionários');?>

<div id="content">
	<div class="box">
<div class="box-head">
	<h2 class="left"><?php echo __('Funcionários'); ?></h2>
	<div class="right">
	       <?php
	               echo $this->Form->create('Employee', array(
	                   'url' => array_merge(array('action' => 'index'), $this->params['pass'])
	                   ));
	               echo $this->Form->input('name', array('div' => false, 'empty' => true,'class'=>'field small-field','label'=>'Buscar')); // empty creates blank option.
	               echo $this->Form->submit(__('Ir', true), array('div' => false,'class'=>'button'));
	               echo $this->Form->end();
	           ?>
	   </div>  
</div>


<div class="employees index">
	
	<table cellpadding="0" cellspacing="0">
	    <tr>
                <!-- <th><?php echo $this->Paginator->sort('id'); ?></th> -->
    			<th><?php echo $this->Paginator->sort('roles_id','Função'); ?></th>
          <!-- <th><?php echo $this->Paginator->sort('number_betel'); ?></th> -->
    			<th><?php echo $this->Paginator->sort('first_name','Nome'); ?></th>
    			<!-- <th><?php echo $this->Paginator->sort('last_name'); ?></th> -->
    			<!-- <th><?php echo $this->Paginator->sort('street'); ?></th>
    			         <th><?php echo $this->Paginator->sort('street_number'); ?></th> -->
    			<th><?php echo $this->Paginator->sort('phone','Telefone'); ?></th>
    			<th><?php echo $this->Paginator->sort('email'); ?></th>
          <!-- <th><?php echo $this->Paginator->sort('date_birth','Data Aniversário'); ?></th> -->
                <!-- <th><?php echo $this->Paginator->sort('rg'); ?></th> -->
                <!-- <th><?php echo $this->Paginator->sort('cpf'); ?></th> -->
                <!-- <th><?php echo $this->Paginator->sort('created'); ?></th> -->
                <!-- <th><?php echo $this->Paginator->sort('modified'); ?></th> -->
    			<th class="actions"><?php echo __('Actions'); ?></th>
    	</tr>
        <?php
    	foreach ($employees as $employee): ?>
    	<tr>
            <!-- <td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td> -->
    		<td>
    			<?php echo $this->Html->link($employee['Role']['role_name'], array('controller' => 'roles', 'action' => 'view', $employee['Role']['id'])); ?>
    		</td>
    		<!-- <td><?php echo h($employee['Employee']['number_betel']); ?>&nbsp;</td>  -->
    		<td><?php echo h($employee['Employee']['first_name']).' '.h($employee['Employee']['last_name']); ?>&nbsp;</td>    		
    		<!-- <td><?php echo h($employee['Employee']['street']); ?>&nbsp;</td>
    		        <td><?php echo h($employee['Employee']['street_number']); ?>&nbsp;</td> -->
    		<td><?php echo h($employee['Employee']['phone']); ?>&nbsp;</td>
    		<td><?php echo h($employee['Employee']['email']); ?>&nbsp;</td>
        <!-- <td><?php echo h($employee['Employee']['date_birth']); ?>&nbsp;</td> -->
            <!-- <td><?php echo h($employee['Employee']['rg']); ?>&nbsp;</td> -->
            <!-- <td><?php echo h($employee['Employee']['cpf']); ?>&nbsp;</td> -->
            <!-- <td><?php echo h($employee['Employee']['created']); ?>&nbsp;</td> -->
            <!-- <td><?php echo h($employee['Employee']['modified']); ?>&nbsp;</td> -->
    		<td class="actions">
    			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employee['Employee']['id']),array('class'=>'replace btn-ver')); ?>
    			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employee['Employee']['id']),array('class'=>'replace btn-editar')); ?>
    			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employee['Employee']['id']), array('class'=>'replace btn-deletar'), __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?>
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
				<li><?php echo $this->Html->link(__('Novo Funcionário'), array('action' => 'add')); ?></li>							
				<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages','action'=>'home')); ?></li>				
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

  