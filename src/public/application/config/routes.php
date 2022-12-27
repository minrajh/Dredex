<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'main/index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'services' => [
		'controller' => 'main',
		'action' => 'services',
	],
	'approach' => [
		'controller' => 'main',
		'action' => 'approach',
	],
	'portfolio' => [
		'controller' => 'main',
		'action' => 'portfolio',
	],
	'about' => [
		'controller' => 'main',
		'action' => 'about',
	],
	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	'post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],
	'privacy' => [
		'controller' => 'main',
		'action' => 'privacy',
	],
	'terms' => [
		'controller' => 'main',
		'action' => 'terms',
	],
	
	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/main' => [
		'controller' => 'admin',
		'action' => 'main',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],

	// CRM
	'crm/login' => [
		'controller' => 'crm',
		'action' => 'login',
	],
	'crm/logout' => [
		'controller' => 'crm',
		'action' => 'logout',
	],
	'crm/add' => [
		'controller' => 'crm',
		'action' => 'add',
	],
	'crm/edit/{id:\d+}' => [
		'controller' => 'crm',
		'action' => 'edit',
	],
	'crm/delete/{id:\d+}' => [
		'controller' => 'crm',
		'action' => 'delete',
	],
	'crm/posts/{page:\d+}' => [
		'controller' => 'crm',
		'action' => 'posts',
	],
	'crm/posts' => [
		'controller' => 'crm',
		'action' => 'posts',
	],
	'crm/develop' => [
		'controller' => 'crm',
		'action' => 'develop',
	],
];