<?php $this->Html->addCrumb('Candidatos', '/candidates');?>
<?php $this->Html->addCrumb('Currículo', '/candidates/view/'.$idCandidate);?>
<?php $this->Html->addCrumb('Referência Pessoal');?>
<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Referência Pessoal'); ?></h2>
</div> 

<div class="description">
	<p class="title"><?php echo __('Candidate'); ?></p>
	<p><?php echo $this->Html->link($personalReferral['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $personalReferral['Candidate']['id'])); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('Name'); ?></p>
	<p><?php echo h($personalReferral['PersonalReferral']['name_contact']); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('Telefone'); ?></p>
	<p><?php echo h($personalReferral['PersonalReferral']['phone_contact']); ?></p>
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
				<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personalReferral['PersonalReferral']['id'])); ?> </li>
				 <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personalReferral['PersonalReferral']['id']), null, __('Are you sure you want to delete # %s?', $personalReferral['PersonalReferral']['id'])); ?> </li>				
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

	


