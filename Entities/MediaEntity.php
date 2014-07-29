<?php

	class MediaEntity {

		private $id;
		private $type;
		private $url;
		private $article;
		private $text;

		public function getId() {
			return $this->id;
		}

		public function getType() {
			return $this->type;
		}

		public function getUrl() {
			return $this->url;
		}

		public function getArticle() {
			return $this->article;
		}

		public function getText() {
			return $this->text;
		}

		public function setId($id) {
			$this->id = $id;
		} 

		public function setType($type) {
			$this->type = $type;
		} 

		public function setUrl($url) {
			$this->url = $url;
		} 

		public function setArticle($article) {
			$this->article = $article;
		} 

		public function setText($text) {
			$this->text = $text;
		} 

	}