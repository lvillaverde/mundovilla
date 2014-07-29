<?php

	require_once __DIR__."/../Entities/MediaEntity.php";
	require_once __DIR__."/../Lib/MysqliConnector.php";

	class MediaRepository {

		protected static $instance;

	    protected function __construct() { }

    	final private function __clone() { }

    	public static function getInstance() {
        	if (!(static::$instance instanceof static)) {
           	 	static::$instance = new static();
        	}
        	return static::$instance;
    	}

    	public function getByArticleId($articleId) {

    		$articleId = (int) $articleId;
    		$query = "SELECT * FROM media WHERE Article = ".$articleId;

    		$result = MysqliConnector::getInstance()->select($query);

			return $this->setData($result->fetch_assoc());

    	}

    	private function setData($data) {

    		$mediaEntity = new MediaEntity();
    		$mediaEntity->setId($data['Id']);
    		$mediaEntity->setType($data['Type']);
    		$mediaEntity->setUrl($data['Url']);
    		$mediaEntity->setArticle($data['Article']);
    		$mediaEntity->setText($data['Text']);

    		return $mediaEntity;

    	}

	}