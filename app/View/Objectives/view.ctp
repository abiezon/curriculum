<?php $this->Html->addCrumb('Candidatos', '/candidates');?>
<?php $this->Html->addCrumb('Currículo', '/candidates/view/'.$idCandidate);?>
<?php $this->Html->addCrumb('Objetivo');?>
<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Objetivos'); ?></h2>
</div> 

<div class="description">
	<p class="title"><?php echo __('Candidate'); ?></p>
	<p><?php echo $this->Html->link($objective['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $objective['Candidate']['id'])); ?></p>
</div>
<div class="description">
	<p class="title"><?php echo __('Description'); ?></p>
	<p><?php echo h($objective['Objective']['description']); ?></p>
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
				<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $objective['Objective']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $objective['Objective']['id']), null, __('Are you sure you want to delete # %s?', $objective['Objective']['id'])); ?> </li>				
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

	


