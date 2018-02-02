<?php 

	require_once("vendor/autoload.php");
	
	use \Slim\Slim;
	use \Hcode\Page;
	use \Hcode\Page\PageAdmin;

	$app = new \Slim\Slim();

	$app->config('debug', true);

	$app->get('/', function() {
	    
		$page = new Page();

		$page->setTpl("index");

	});

	$app->get('/admin', function() {
    
		$page = new Hcode\PageAdmin();

		$page->setTpl("index");


	});

	$app->run();

 ?>