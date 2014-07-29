<?php

	require_once __DIR__."/../Lib/MysqliConnector.php";
    require_once __DIR__."/../Entities/PollOptionEntity.php";

	class PollOptionRepository {

		protected static $instance;

	    protected function __construct() { }

    	final private function __clone() { }

    	public static function getInstance() {
        	if (!(static::$instance instanceof static)) {
           	 	static::$instance = new static();
        	}
        	return static::$instance;
    	}

    	public function getOptionsByPollId($id) {
            
            $id = (int) $id;

    		$query = "SELECT * FROM poll_options WHERE poll = ".$id;
            $result = MysqliConnector::getInstance()->select($query);

            $arrOptions = array();

            while($row = $result->fetch_assoc()) {
                $arrOptions[] = $this->setData($row);
            }

            return $arrOptions;

    	}

        private function setData($data) {

            $pollOptionEntity = new PollOptionEntity();
            $pollOptionEntity->setId($data['Id']);
            $pollOptionEntity->setPoll($data['Poll']);
            $pollOptionEntity->setText($data['Text']);
            $pollOptionEntity->setVotes($data['Votes']);

            return $pollOptionEntity;

        }

	}