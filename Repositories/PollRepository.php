<?php

	require_once __DIR__."/../Lib/MysqliConnector.php";
    require_once __DIR__."/../Entities/PollEntity.php";
    require_once __DIR__."/../Repositories/PollOptionRepository.php";

	class PollRepository {

		protected static $instance;

	    protected function __construct() { }

    	final private function __clone() { }

    	public static function getInstance() {
        	if (!(static::$instance instanceof static)) {
           	 	static::$instance = new static();
        	}
        	return static::$instance;
    	}

    	public function getLastPoll() {

    		$query = "SELECT * FROM polls WHERE IsPublished = 1 ORDER BY id DESC";
            $result = MysqliConnector::getInstance()->select($query);

            return $this->setData($result->fetch_assoc());

    	}

        private function setData($data) {

            $pollEntity = new PollEntity();

            $pollEntity->setId($data['Id']);
            $pollEntity->setType($data['Type']);
            $pollEntity->setText($data['Text']);
            $pollEntity->setDate($data['Date']);
            $pollEntity->setIsPublished($data['IsPublished']);
            $pollEntity->setIsClosed($data['IsClosed']);

            $pollEntity->setOptions(PollOptionRepository::getInstance()->getOptionsByPollId($pollEntity->getId()));

            return $pollEntity;

        }

	}