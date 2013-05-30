<?php $this->Html->addCrumb('Candidatos', '/candidates');?>
<?php $this->Html->addCrumb('Currículo', '/candidates/view/'.$idCandidate);?>
<?php $this->Html->addCrumb('Novo Objetivo');?>
<!-- <div class="box"> -->
	<!-- Box Head -->
	<div id="content">
		<div class="box">	
	<div class="box-head">
		<h2><?php echo __('Adicionar Objetivo'); ?></h2>
	</div>
	<!-- End Box Head -->
	
	<!-- <form action="" method="post"> -->
	<?php echo $this->Form->create('Objective'); ?> 
		
		<!-- Form -->
		<div class="form">
		    <?php
        		echo $this->Form->input('candidate_id',array('class'=>'field'));
        		echo $this->Form->input('description',array('class'=>'field size1'));        		
        	?>		    		
		</div>
		<!-- End Form -->
		
		<!-- Form Buttons -->
		<div class="buttons">
            <input type="button" class="button" value="Cancelar" onclick="location.href='<?php echo $this->Html->url(array('controller' => 'candidates', 'action' => 'view',$idCandidate)); ?>';" />		
    		<?php echo $this->Form->button(__('Save'),array('class'=>'button')); ?>
    	</div>
		<!-- End Form Buttons -->
	</form>
	
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
			   <li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li> 
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>	
<!-- </div> -->
 

