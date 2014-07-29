<?php
	
	require_once __DIR__."/../Lib/MysqliConnector.php";
	require_once __DIR__."/../Entities/ArticleEntity.php";

	class ArticleRepository {

		protected static $instance;

	    protected function __construct() { }

    	final private function __clone() { }

    	public static function getInstance() {
        	if (!(static::$instance instanceof static)) {
           	 	static::$instance = new static();
        	}
        	return static::$instance;
    	}


		public function getById($id) {

			$id = (int) $id;
			$query = "SELECT * FROM articles WHERE id = ".$id;
			$result = MysqliConnector::getInstance()->select($query);

			return $this->setData($result->fetch_assoc());

		}

		public function getLastArticles($section = 0) {

			$section = (int) $section;

			$query = "SELECT * FROM articles WHERE Villa = 1 AND Published = 1 ";

			if($section > 0) {
				$query .= " AND Section = ".$section;
			}

			$query .= " ORDER BY Date LIMIT 10";
			$result = MysqliConnector::getInstance()->select($query);

			$arrArticles = array();

			while($row = $result->fetch_assoc()) {
				$arrArticles[] = $this->setData($row);
			}

			return $arrArticles;

		}

		public function getLastDoubleColumn($section = 0) {

			$section = (int) $section;

			$query = "SELECT * FROM articles WHERE DoubleColumn = 1 AND Villa = 1 AND Published = 1 ";
			
			if($section > 0) {
				$query .= " AND section = ".$section;
			}

			$query .= " ORDER BY Date LIMIT 1";

			$result = MysqliConnector::getInstance()->select($query);

			return $this->setData($result->fetch_assoc());

		}

		private function setData($data) {

			$articleEntity = new ArticleEntity();
			$articleEntity->setId($data['Id']);
			$articleEntity->setDate($data['Date']);
			$articleEntity->setSection($data['Section']);
			$articleEntity->setImportant($data['Important']);
			$articleEntity->setTitle($data['Title']);
			$articleEntity->setPreview($data['Preview']);
			$articleEntity->setBody($data['Body']);
			$articleEntity->setPublished($data['Published']);
			$articleEntity->setTags($data['Tags']);
			$articleEntity->setVilla($data['Villa']);
			$articleEntity->setDoubleColumn($data['DoubleColumn']);
			$articleEntity->setViews($data['Views']);
			$articleEntity->setImage();

			return $articleEntity;

		}

	}