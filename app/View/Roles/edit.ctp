<div id="content">
	<div class="box">
<div class="box-head">
	<h2><?php echo __('Edit Role'); ?></h2>
</div>
<div class="form">
	
	<?php echo $this->Form->create('Role'); ?>
		
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('role_name',array('class'=>'field size1'));
		?>
		<div class="buttons">
			<!-- <input type="button" class="button" value="preview" /> -->
			<?php echo $this->Form->end(__('Submit'),array('class'=>'button')); ?>	
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
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Role.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Role.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>								
			</ul>				
			<div class="cl">&nbsp;</div>			
			
		</div>
	</div>
	<!-- End Box -->
</div>

<!-- <div class="roles form">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
		<legend><?php echo __('Edit Role'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('role_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div> -->

