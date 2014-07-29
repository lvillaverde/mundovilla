<?php

	require_once __DIR__."/../Lib/MysqliConnector.php";
	require_once __DIR__."/../Entities/BannerEntity.php";

	class BannerRepository {

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

    		$query = "SELECT * FROM banners ";
    		$result = MysqliConnector::getInstance()->select($query);

			$arrBanners = array();

			while($row = $result->fetch_assoc()) {
				$arrBanners[] = $this->setData($row);
			}

			return $arrBanners;

    	}

    	private function setData($data) {

    		$bannerEntity = new BannerEntity();

    		$bannerEntity->setId($data['Id']);
    		$bannerEntity->setFile($data['File']);
    		$bannerEntity->setLink($data['Link']);
    		$bannerEntity->setWidth($data['Width']);
    		$bannerEntity->setHeight($data['Height']);

    		return $bannerEntity;

    	}

	}