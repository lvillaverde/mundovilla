<?php

	class BannerEntity {

		private $id;
		private $file;
		private $link;
		private $width;
		private $height;

		public function getId() {
			return $this->id;
		}

		public function getFile() {
			return $this->file;
		}		

		public function getLink() {
			return $this->link;
		}		

		public function getWidth() {
			return $this->width;
		}		

		public function getHeight() {
			return $this->height;
		}

		public function getImage() {
			return "http://www.mundovilla.com/uploads/".$this->file;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function setFile($file) {
			$this->file = $file;
		}

		public function setLink($link) {
			$this->link = $link;
		}

		public function setWidth($width) {
			$this->width = $width;
		}

		public function setHeight($height) {
			$this->height = $height;
		}

	}