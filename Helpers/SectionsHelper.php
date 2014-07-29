<?php

	class SectionsHelper {

		public static function getSectionName($id) {
			
			$sections = array(1 => 'Cultura',
						   2 => 'Deportes',
						   3 => 'Urbanidad',
						   4 => 'Salud',
						   5 => 'Sociedad',
						   6 => 'Colectividades',
						   7 => 'Perfil',
						   8 => 'Opinión',
						   23 => 'Multimedia');

			return $sections[$id];
		}

	}