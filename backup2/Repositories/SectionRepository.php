<?php

	require_once __DIR__."/../Lib/MysqliConnector.php";
	require_once __DIR__."/../Entities/SectionEntity.php";

	class SectionRepository {

		protected static $instance;

	    protected function __construct() { }

    	final private function __clone() { }

    	public static function getInstance() {
        	if (!(static::$instance instanceof static)) {
           	 	static::$instance = new static();
        	}
        	return static::$instance;
    	}

    	public function getAll() {

    		$query = "SELECT * FROM sections ";
    		$result = MysqliConnector::getInstance()->select($query);

			$arrSections = array();

			while($row = $result->fetch_assoc()) {
				$arrSections[] = $this->setData($row);
			}

			return $arrSections;

    	}

    	private function setData($data) {

    		$sectionEntity = new SectionEntity();
    		$sectionEntity->setId($data['Id']);
    		$sectionEntity->setName($data['Name']);

    		return $sectionEntity;

    	}

	}