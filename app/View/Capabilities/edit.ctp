<?php $this->Html->addCrumb('Capacitação', '/capabilities');?>
<?php $this->Html->addCrumb('Editar Capacitação');?> 
<div id="content">
	<div class="box">
<!-- <div class="box"> -->
	<!-- Box Head -->
	<div class="box-head">
		<h2><?php echo __('Editar Capacitação'); ?></h2>
	</div>
	<!-- End Box Head -->
	
	<!-- <form action="" method="post"> -->
	<?php echo $this->Form->create('Capabilitie'); ?>	
		
		<!-- Form -->
		<div class="form">
				
			<?php
    		echo $this->Form->input('id',array('class'=>'field'));
    		echo $this->Form->input('type_id',array('class'=>'field size1','label'=>'Tipo'));
    		echo $this->Form->input('name_capabicity',array('class'=>'field size1','label'=>'Nome da Capacitação'));
    		echo $this->Form->input('institution',array('class'=>'field size1'));
    		echo $this->Form->input('duration',array('class'=>'field size2'));
    		echo $this->Form->input('date_capabicity',array('class'=>'field size','label'=>'Data da Capacitação'));
            // echo $this->Form->input('Employee'); 
             
    	?>
		</div>
		<!-- End Form -->
		
		<!-- Form Buttons -->
		<div class="buttons">
            <input type="button" class="button" value="Cancelar" onclick="location.href='<?php echo $this->Html->url(array('controller' => 'capabilities', 'action' => 'index')); ?>';" />		
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

      		<li><?php echo $this->Form->postLink(__('Excluir Capacitação'), array('action' => 'delete', $this->Form->value('Capabilitie.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Capabilitie.id'))); ?></li>
      		  
      		<li><?php echo $this->Html->link(__('Listar Capacitação'), array('action' => 'index')); ?></li>
      	 
      		
      		</ul>				
				<div class="cl">&nbsp;</div>			

			</div>
		</div>
		<!-- End Box -->
	</div>	





