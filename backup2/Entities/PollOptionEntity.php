<?php

	class PollOptionEntity {

		private $id;
		private $poll;
		private $text;
		private $votes;

		public function getId() {
			return $this->id;
		}

		public function getPoll() {
			return $this->poll;
		}

		public function getText() {
			return $this->text;
		}

		public function getVotes() {
			return $this->votes;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function setPoll($poll) {
			$this->poll = $poll;
		}

		public function setText($text) {
			$this->text = $text;
		}

		public function setVotes($votes) {
			$this->votes = $votes;
		}

	}