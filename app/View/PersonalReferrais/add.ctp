<?php echo $this->Html->script('jquery.maskedinput-1.3'); ?> 

<!-- <div class="box"> -->
	<!-- Box Head -->
	<div id="content">
		<div class="box">	
	<div class="box-head">
		<h2><?php echo __('Adicionar Referência Pessoal'); ?></h2>
	</div>
	<!-- End Box Head -->
	
	<!-- <form action="" method="post"> -->
	<?php echo $this->Form->create('PersonalReferral'); ?> 
		
		<!-- Form -->
		<div class="form">
		    <?php
        		echo $this->Form->input('candidate_id',array('class'=>'field'));
        		echo $this->Form->input('name_contact',array('class'=>'field size1','label'=>'Nome'));
        		echo $this->Form->input('phone_contact',array('class'=>'field size3','label'=>'Telefone'));
        	?>		    		
		</div>
		<!-- End Form -->
		<p>&nbsp;</p>	
		<p class="actions"><?php echo $this->Html->link(__('Back'), array(
			'controller' => 'candidates',
			'action' => 'view',	$idCandidate
			)); ?> 
		</p>
		<!-- Form Buttons -->
		<div class="buttons">
			<!-- <input type="button" class="button" value="preview" /> -->
			<?php echo $this->Form->end(__('Save')); ?>
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




<script type="text/javascript">
    jQuery(document).ready(function($){        
       
        $("#PersonalReferralPhoneContact").mask("(99)9999-9999");       
    });
</script>
