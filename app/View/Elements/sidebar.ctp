<div id="sidebar">
	
	<!-- Box -->
	<div class="box">
		
		<!-- Box Head -->
		<div class="box-head">
			<h2><?php echo __('Gerenciamento')?></h2>
		</div>
		<!-- End Box Head-->
		
		<div class="box-content">
			<!-- <a href="#" class="add-button"><span>Add new Article</span></a>
						<a href="#" class="add-button"><span>Listar Candidadto</span></a>
						<a href="#" class="add-button"><span>Home</span></a> -->
				<?php //echo $this->Home->menuSideBar($this->params)?>
				<?php foreach($this->Home->menuSideBar($this->params) as $menu){
						echo $menu;
				}?>					
			<div class="cl">&nbsp;</div>
			
			
			<!-- Sort -->
			
			<!-- End Sort -->
			
		</div>
	</div>
	<!-- End Box -->
</div>