<?php $this->Html->addCrumb('Capacitação', '/capabicities');?>
<?php $this->Html->addCrumb('Visualizar Tipo de Capacitação');?>
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



<div class="capabicityTypes view">
<h2><?php  echo __('Capabicity Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($capabicityType['CapabicityType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($capabicityType['CapabicityType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Capabicity Type'), array('action' => 'edit', $capabicityType['CapabicityType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Capabicity Type'), array('action' => 'delete', $capabicityType['CapabicityType']['id']), null, __('Are you sure you want to delete # %s?', $capabicityType['CapabicityType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Capabicity Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Capabicity Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
