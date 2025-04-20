<?php
$route['default_controller'] = 'index'; // Login será a página inicial
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Rotas para os controllers
$route['cadastro'] = 'cadastro';
$route['dashboard'] = 'dashboard';
$route['financeiro'] = 'financeiro';
$route['perfil'] = 'perfil';
$route['tabelas'] = 'tabelas';
$route['login'] = 'login'; // Caso precise acessar login diretamente
