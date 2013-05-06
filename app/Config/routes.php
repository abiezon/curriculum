<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
    /* Candidates routes */ 
	Router::connect('/curriculo', array('controller' => 'candidates', 'action' => 'index'));
	Router::connect('/curriculo/novo', array('controller' => 'candidates', 'action' => 'add'));
	Router::connect('/curriculo/editar/*', array('controller' => 'candidates', 'action' => 'edit'));
	Router::connect('/curriculo/visualizar/*', array('controller' => 'candidates', 'action' => 'view'));
	/*Roles routes */     
	Router::connect('/funcao', array('controller' => 'roles', 'action' => 'index'));
	Router::connect('/funcao/nova', array('controller' => 'roles', 'action' => 'add'));
	Router::connect('/funcao/editar/*', array('controller' => 'roles', 'action' => 'edit'));
	Router::connect('/funcao/visualizar/*', array('controller' => 'roles', 'action' => 'view')); 
	/* Experiencies routes */
	Router::connect('/curriculo/experiencia/visualizar/*', array('controller' => 'experiences', 'action' => 'view'));
	Router::connect('/curriculo/experiencia/editar/*', array('controller' => 'experiences', 'action' => 'edit'));
	Router::connect('/curriculo/experiencia/nova', array('controller' => 'experiences', 'action' => 'add')); 
	
	/* Employees routes */
	Router::connect('/funcionario', array('controller' => 'employees', 'action' => 'index'));
	Router::connect('/funcionario/novo', array('controller' => 'employees', 'action' => 'add'));
	Router::connect('/funcionario/editar/*', array('controller' => 'employees', 'action' => 'edit'));
	Router::connect('/funcionario/visualizar/*', array('controller' => 'employees', 'action' => 'view')); 
	
	Router::connect('/capacitacao', array('controller' => 'capabilities', 'action' => 'index'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
