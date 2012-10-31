

<?php
	$active = $this->Session->request;
	//debug($active);
	
	if($active['controller']=='experiences' || $active['controller']=='acquirements' || $active['controller']=='languages' || $active['controller']=='courses' || $active['controller']=='candidates')
		$activeCandidate = true;
	else
		$activeCandidate = false;
	
?>

<ul>
    <li><a href="/" class="<?php echo $active['controller'] =='pages'? "active": "" ?>"><span>Home</span></a></li>
    <li><a href="/candidates" class="<?php echo $activeCandidate == true ? "active": "" ?>"><span>Candidato</span></a></li>
    <li><a href="/roles" class="<?php echo $active['controller'] =='roles'? "active": "" ?>"><span><?php echo __('Função')?></span></a></li>
    <li><a href="/users" class="<?php echo $active['controller'] =='users'? "active": "" ?>"><span><?php echo __('Usuário')?></span></a></li>			    
</ul>