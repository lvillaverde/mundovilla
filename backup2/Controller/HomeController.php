<?php

	require_once __DIR__."/../Repositories/ArticleRepository.php";

	class HomeController {

		protected static $instance;

	    protected function __construct() { }

    	final private function __clone() { }

    	public static function getInstance() {
        	if (!(static::$instance instanceof HomeController)) {
           	 	static::$instance = new HomeController();
        	}
        	return static::$instance;
    	}

		public function homeAction() {
			
			$section = 0;

			if(isset($_GET['idSection'])) {
				$section = $_GET['idSection'];
			}

			$render['doubleColumn'] = ArticleRepository::getInstance()->getLastDoubleColumn($section);
			$render['lastArticles'] = ArticleRepository::getInstance()->getLastArticles($section);
			return $render;
		}

	}