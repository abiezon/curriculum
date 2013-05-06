

<?php
	$active = $this->Session->request;
	//debug($active);
	
	if($active['controller']=='experiences' || $active['controller']=='acquirements' || $active['controller']=='languages' || $active['controller']=='courses' || $active['controller']=='candidates')
		$activeCandidate = true;
	else
		$activeCandidate = false; 
		
	if($active['controller']=='capabicity_types' || $active['controller']=='capabilities' || $active['controller']=='employee_capabilities') 
	  $activeCapabilie = true;
	else  
	  $activeCapabilie = false;
	
?>

<ul>
    <li><a href="/" class="<?php echo $active['controller'] =='pages'? "active": "" ?>"><span>Home</span></a></li>
    <li><a href="/curriculo" class="<?php echo $activeCandidate == true ? "active": "" ?>"><span>Currículo</span></a></li>
    <li><a href="/funcao" class="<?php echo $active['controller'] =='roles'? "active": "" ?>"><span><?php echo __('Função')?></span></a></li>
    <li><a href="/users" class="<?php echo $active['controller'] =='users'? "active": "" ?>"><span><?php echo __('Usuário')?></span></a></li>
    <li><a href="/funcionario" class="<?php echo $active['controller'] =='employees'? "active": "" ?>"><span><?php echo __('Funcionário')?></span></a></li>
    <li><a href="/capacitacao" class="<?php echo $activeCapabilie == true ? "active": "" ?>"><span><?php echo __('Capacitação')?></span></a></li>			    
</ul>