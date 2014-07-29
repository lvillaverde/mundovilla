<?php

	class DateHelper {

		public static function stringDate() {

			$months = array('Enero',
							'Febrero',
							'Marzo',
							'Abril',
							'Mayo',
							'Junio',
							'Julio',
							'Agosto',
							'Octubre',
							'Noviembre',
							'Diciembre');

			$days = array('Lunes',
					      'Martes',
						  'Miércoles',
						  'Jueves',
						  'Viernes',
						  'Sábado',
						  'Domingo');

			$date = new DateTime();
			$month = $date->format("m");
			
			$day = $date->format("N");


			$string = $days[$day-1].' '.$date->format("d").' de '.$months[$month-1].' de '.$date->format('Y');

			return $string;

		}

	}