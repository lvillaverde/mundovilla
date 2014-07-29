<?php

	require_once __DIR__."/../Repositories/MediaRepository.php";

	class ArticleEntity {

		private $id;
		private $date;
		private $section;
		private $important;
		private $title;
		private $preview;
		private $body;
		private $published;
		private $tags;
		private $villa;
		private $doubleColumn;
		private $views;
		private $image;
		
		public function getId() {
			return $this->id;
		}

		public function getDate() {
			return $this->date;
		}

		public function getSection() {
			return $this->section;
		}

		public function getImportant() {
			return $this->important;
		}

		public function getTitle() {
			return $this->title;
		}

		public function getPreview() {
			return $this->preview;
		}

		public function getBody() {
			return $this->body;
		}

		public function getPublished() {
			return $this->published;
		}

		public function getTags() {
			return $this->tags;
		}

		public function getVilla() {
			return $this->villa;
		}

		public function getDoubleColumn() {
			return $this->doubleColumn;
		}

		public function getViews() {
			return $this->views;
		}

		public function getLink() {
			return "article.php?idArticle=".$this->id;
		}

		public function getImage() {
			return $this->image;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function setDate($date) {
			$this->date = $date;
		}

		public function setSection($section) {
			$this->section = $section;
		}

		public function setImportant($important) {
			$this->important = $important;
		}

		public function setTitle($title) {
			$this->title = $title;
		}

		public function setPreview($preview) {
			$this->preview = $preview;
		}

		public function setBody($body) {
			$this->body = $body;
		}

		public function setPublished($published) {
			$this->published = $published;
		}

		public function setTags($tags) {
			$this->tags = $tags;
		}

		public function setVilla($villa) {
			$this->villa = $villa;
		}

		public function setDoubleColumn($doubleColumn) {
			$this->doubleColumn = $doubleColumn;
		}

		public function setViews($views) {
			$this->views = $views;
		}

		public function setImage() {
			$this->image = MediaRepository::getInstance()->getByArticleId($this->id);
		}



	}