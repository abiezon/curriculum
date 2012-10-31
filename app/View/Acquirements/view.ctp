<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Conhecimento Específico'); ?></h2>
</div> 

<div class="description">
	<p class="title"><?php echo __('Candidate'); ?></p>
	<p><?php echo $this->Html->link($acquirement['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $acquirement['Candidate']['id'])); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('Description'); ?></p>
	<p><?php echo h($acquirement['Acquirement']['description']); ?></p>
</div>
 
<div class="buttons">
    <p class="back"><?php echo $this->Html->image("back_list.png",array('url'=>array('controller'=>'candidates','action'=>'view',$idCandidate),'title'=>'Voltar ao currículo','class'=>'btn-voltar'))?></p>
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
				<li><?php echo $this->Html->link(__('Edit Acquirement'), array('action' => 'edit', $acquirement['Acquirement']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Acquirement'), array('action' => 'delete', $acquirement['Acquirement']['id']), null, __('Are you sure you want to delete # %s?', $acquirement['Acquirement']['id'])); ?> </li>
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

	



