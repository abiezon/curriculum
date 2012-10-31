<?php
App::uses('Helper', 'View');

class HomeHelper extends AppHelper {
	
	public function getStates(){
		$states = array(""=>"Selecione",
						"MS" => "MS",
		);
		
		return $states;
	}
	
	public function getSchooling(){
		$options = array(""=>"Selecione",
						 "1"=>"Ensino Fundamental Incompleto",
						 "2"=>"Ensino Fundamental Completo",
						 "3"=>"Ensino Médio Incompleto",
						 "4"=>"Ensino Médio Completo",
						 "5"=>"Ensino Superior Incompleto",
						 "6"=>"Ensino Superior Completo",
						 "7"=>"Mestrado",
						 "8"=>"Pós-Graduado",
						 "9"=>"Doutorado");
		return $options;				
	}
	
	public function viewSchooling($search){
		
		$option = $this->getSchooling();
		
		return $option[$search];
		
	}
	
	public function getGender(){
		$options = array(
			""=>"Selecione",
			"M"=>"Masculino",
			"F"=>"Feminino"
		);
		
		return $options;
	}
	
	public function viewGender($search){
		$option = $this->getGender();
		
		return $option[$search];
	}
	
	public function viewAtualWork($i){

		if($i == 0)
			return "Não";
		else
			return "Sim";
		
	}
	
	public function viewLanguage($i){

		$options = array(
			'0'=>'Lê',
			'1'=>'Lê e Escreve',
			'2'=>'Lê, Escreve e Fala');
			
		return $options[$i];	
		
	}
	
	public function menuSideBar($params){
		//debug($params['controller']);
		$menu = array("candidates"=>array(
						"<a href='/pages'>Home</a>",
						"<a href='/candidates/index'><span>Listar</span></a>"
						),
					 "roles"=>array(
						"<a href='/pages'><span>Home</span></a>",
						"<a href='/roles/index'><span>Listar</span></a>",
						"<a href='/roles/add'><span>Adicionar</span></a>"
						),	
					);
		
		return $menu[$params['controller']];
		
	}
}
?>