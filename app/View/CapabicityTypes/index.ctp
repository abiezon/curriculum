<?php $this->Html->addCrumb('Capacitação','/capabilities');?>
<?php $this->Html->addCrumb('Tipo de Capacitação');?>
<div id="content">
	<div class="box">
<div class="box-head">
	<h2 class="left"><?php echo __('Tipo de Capacitação'); ?></h2>	
</div>

<div class="capabicityTypes index">
	<!-- <h2><?php echo __('Roles'); ?></h2> -->
	<table cellpadding="0" cellspacing="0">
	  <tr>
  			
  			<th><?php echo $this->Paginator->sort('name'); ?></th>
  			<th class="actions"><?php echo __('Actions'); ?></th>
  	</tr>
	<?php
	foreach ($capabicityTypes as $capabicityType): ?>
	<tr>
	 
		<td width="80%"><?php echo h($capabicityType['CapabicityType']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $capabicityType['CapabicityType']['id']),array('class'=>'replace btn-ver')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $capabicityType['CapabicityType']['id']),array('class'=>'replace btn-editar')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $capabicityType['CapabicityType']['id']), array('class'=>'replace btn-deletar'), __('Are you sure you want to delete # %s?', $capabicityType['CapabicityType']['id'])); ?>
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
    		<li><?php echo $this->Html->link(__('Novo Tipo Capacitação'), array('action' => 'add')); ?></li>
    	</ul>			
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

 
