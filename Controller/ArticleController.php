<?php

	require_once __DIR__."/../Repositories/ArticleRepository.php";
	require_once __DIR__."/../Repositories/BannerRepository.php";
	require_once __DIR__."/../Repositories/PollRepository.php";
	require_once __DIR__."/../Repositories/MediaRepository.php";

	class ArticleController {

		protected static $instance;

	    protected function __construct() { }

    	final private function __clone() { }

    	public static function getInstance() {
        	if (!(static::$instance instanceof static)) {
           	 	static::$instance = new static();
        	}
        	return static::$instance;
    	}

		public function articleAction() {
			
			$render['article'] = ArticleRepository::getInstance()->getById($_GET['idArticle']);
			$render['photos'] = MediaRepository::getInstance()->getAllByArticleId($_GET['idArticle']);
			$render['banners'] = BannerRepository::getInstance()->getAll();
			$render['poll'] = PollRepository::getInstance()->getLastPoll();
			
			return $render;
		}

	}