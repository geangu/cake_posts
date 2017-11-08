<?php
	Router::connect('/', array('controller' => 'posts', 'action' => 'index', 'home'));
	CakePlugin::routes();
	
	require CAKE . 'Config' . DS . 'routes.php';
