<?php $this->Html->addCrumb('Capacitação', '/capacitacao');?>
<?php $this->Html->addCrumb('Inscrição');?>

<div id="content">
  <!-- Box View-->
	<div class="box">
	  <?php foreach($capacity as $desc){ ?>	                                        
    <div class="box-head">
    	<h2><?php echo __('Inscrição').' '.h($desc['Capabilitie']['name_capabicity']); ?></h2>
    </div>
     <div class="description">
        <p class="title" style="float:left; width: 30%"><?php echo __('Nome da Capacitação'); ?></p>
     	  <p style="float:left;font-weight: bold; width: 50%"> <?php echo h($desc['Capabilitie']['name_capabicity']); ?></p>
     	  
        <p class="title" style="float:left; width: 30%"><?php echo __('Tipo de Capacitação'); ?></p>
      	<p style="float:left;font-weight: bold; width: 50%"> <?php echo h($desc['CapabicityType']['name']); ?></p>       
     
        <p class="title" style="float:left; width: 30%"><?php echo __('Instituição'); ?></p>
       	<p style="float:left;font-weight: bold; width: 50%"> <?php echo h($desc['Capabilitie']['institution']); ?></p>
      
        <p class="title" style="float:left; width: 30%"><?php echo __('Duração'); ?></p>
        <p style="float:left; font-weight: bold; width: 50%"> <?php echo h($desc['Capabilitie']['duration']); ?></p>
      
        <p class="title" style="float:left; width: 30%"><?php echo __('Data da Capacitação'); ?></p>
        <p style="float:left; font-weight: bold; width: 50%"><?php echo h($desc['Capabilitie']['date_capabicity']); ?></p>
      </div>
  
  <?php }?>
  <div class="form">
  <?php echo $this->Form->create('Capabilitie'); ?>
  	<fieldset>
  		
  	<?php
  		  echo $this->Form->input('id');
  	 
  		echo $this->Form->input('Employee',array('label'=>'Funcionários','class'=>'field size2'));
  	?>
  	</fieldset>
  	<div class="buttons">
  	    <?php echo $this->Form->button(__('Save'),array('class'=>'button')); ?>
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

    		<li><?php echo $this->Html->link(__('List Capabilities'), array('action' => 'index')); ?></li>
    		<li><?php echo $this->Html->link(__('List Capabicity Types'), array('controller' => 'capabicity_types', 'action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('New Capabicity Type'), array('controller' => 'capabicity_types', 'action' => 'add')); ?> </li>
    		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
    	</ul>				
			<div class="cl">&nbsp;</div>			

		</div>
	</div>
	<!-- End Box -->
</div>

