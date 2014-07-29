<?php

	class PollEntity {

		private $id;
		private $type;
		private $text;
		private $date;
		private $isPublished;
		private $isClosed;
		private $options;

		public function getId() {
			return $this->id;
		}

		public function getType() {
			return $this->type;
		}

		public function getText() {
			return $this->text;
		}

		public function getDate() {
			return $this->date;
		}

		public function getIsPublished() {
			return $this->isPublished;
		}

		public function getIsClosed() {
			return $this->isClosed;
		}

		public function getOptions() {
			return $this->options;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function setType($type) {
			$this->type = $type;
		}

		public function setText($text) {
			$this->text = $text;
		}

		public function setDate($date) {
			$this->date = $date;
		}

		public function setIsPublished($isPublished) {
			$this->isPublished = $isPublished;
		}

		public function setIsClosed($isClosed) {
			$this->isClosed = $isClosed;
		}

		public function setOptions($options) {
			$this->options = $options;
		}

	}