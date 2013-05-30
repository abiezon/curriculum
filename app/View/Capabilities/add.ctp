<?php $this->Html->addCrumb('Capacitação', '/capabilities');?>
<?php $this->Html->addCrumb('Nova Capacitação');?>
<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Nova Capacitação'); ?></h2>
</div>
<div class="form">
	
	<?php echo $this->Form->create('Capabilitie'); ?> 
		
		<?php
  		echo $this->Form->input('type_id',array('class'=>'field size1','label'=>'Tipo'));
  		echo $this->Form->input('name_capabicity',array('class'=>'field size1','label'=>'Nome da Capacitação'));
  		echo $this->Form->input('institution',array('class'=>'field size1'));
  		echo $this->Form->input('duration',array('class'=>'field size2'));
  		echo $this->Form->input('date_capabicity',array('dateFormat'=>'YMD','class'=>'inline-field field size2','label'=>'Data da Capacitação'));
  		//echo $this->Form->input('Employee',array('class'=>'field size1'));
  	?>     
  	<br/>
		<div class="buttons">
            <input type="button" class="button" value="Cancelar" onclick="location.href='<?php echo $this->Html->url(array('controller' => 'capabilities', 'action' => 'index')); ?>';" />		
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

    		<li><?php echo $this->Html->link(__('Listar Capacitação'), array('action' => 'index')); ?></li>
    		<li><?php echo $this->Html->link(__('Tipo de Capacitação'), array('controller' => 'capabicity_types', 'action' => 'index')); ?> </li>
    		
    		 </ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>
