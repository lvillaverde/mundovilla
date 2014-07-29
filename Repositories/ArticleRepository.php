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
			$query = "SELECT * FROM articles a LEFT JOIN villas v ON a.Villa = v.id WHERE a.id = ".$id;
			$result = MysqliConnector::getInstance()->select($query);

			return $this->setData($result->fetch_assoc());

		}

		public function getLastArticles($section = 0) {

			$section = (int) $section;

			$query = "SELECT * FROM articles WHERE Published = 1 ";

			if($section > 0) {
				$query .= " AND Section = ".$section;
			}

			$query .= " ORDER BY Date DESC LIMIT 10";
			$result = MysqliConnector::getInstance()->select($query);

			$arrArticles = array();

			while($row = $result->fetch_assoc()) {
				$arrArticles[] = $this->setData($row);
			}

			return $arrArticles;

		}

		public function getImportantArticles($section = 0) {

			$section = (int) $section;

			$query = "SELECT * FROM articles WHERE Published = 1 AND Important = 1";

			if($section > 0) {
				$query .= " AND Section = ".$section;
			}

			$query .= " ORDER BY Date DESC LIMIT 10";
			$result = MysqliConnector::getInstance()->select($query);

			$arrArticles = array();

			while($row = $result->fetch_assoc()) {
				$arrArticles[] = $this->setData($row);
			}

			return $arrArticles;

		}

		public function getLastDoubleColumn($section = 0) {

			$section = (int) $section;

			$query = "SELECT * FROM articles WHERE DoubleColumn = 1 AND Published = 1 ";
			
			if($section > 0) {
				$query .= " AND section = ".$section;
			}

			$query .= " ORDER BY Date DESC LIMIT 1";

			$result = MysqliConnector::getInstance()->select($query);

			return $this->setData($result->fetch_assoc());

		}

		public function searchArticles($param){
			/*$query = "SELECT COUNT(*) as total
								 FROM articles a 
									  LEFT JOIN sections s ON a.Section = s.Id
									  LEFT JOIN villas v ON a.Villa = v.Id
								 WHERE (Published = 1
									  AND (a.Title LIKE '%".$param."%' 
									  OR a.Tags LIKE '%".$param."%')";

			$result = MysqliConnector::getInstance()->select($query);
			
			$total = $result->fetch_assoc();
	
			$total = $total['total'];
			$totalPaginas = ceil($total / 10);
	
			$query = "SELECT a.*, DATE_FORMAT(a.Date, \"%d de %M de %Y\") FormattedDate, s.Name SectionName , v.Name as VillaName
					  FROM articles a 
					  	LEFT JOIN sections s ON a.Section = s.Id
						LEFT JOIN villas v ON a.Villa = v.Id
					  WHERE (Published
					    OR " . ($_SESSION["bAdmin"] ? "true" : "false") . ")
						AND (a.Section = {$iSection}
						OR {$iSection} = 0)
						AND (a.Title LIKE '%{$sSearchQuery}%' OR a.Tags LIKE '%{$sSearchQuery}%')
						AND (a.Villa = $iVilla OR NOT $iCategory = 2)
					  ORDER BY $sOrderBy
					  LIMIT $iOffset, $iPageSize");*/
	
	
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
			$articleEntity->villaName = $data['Name'];

			return $articleEntity;

		}

	}