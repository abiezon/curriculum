<?php $this->Html->addCrumb('Função', '/roles');?>
<?php $this->Html->addCrumb('Visualizar');?>
<div id="content">
	<div class="box">
<div class="box-head">
	<h2 class="left"><?php echo __('Roles'); ?></h2>	
</div>
<div class="roles view">

	<div class="description">
		<p class="title"><?php echo __('Role Name'); ?></p>
		<p><?php echo h($role['Role']['role_name']); ?></p>
	</div>
	<!-- <dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($role['Role']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Role Name'); ?></dt>
			<dd>
				<?php echo h($role['Role']['role_name']); ?>
				&nbsp;
			</dd>
		</dl> -->
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
				<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']), null, __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>				
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

