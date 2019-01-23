<?php

$color = $_POST['color'];

$color_1 = '00cc99';
$color_2 = 'ff6600';
$color_3 = '33adff';
$color_4 = 'A0FC77';

// Проверка на RGB кода на зададения цвят

if ($color == $color_1) {
	$color = [0, 204, 153];
}
	if ($color == $color_2) {
		$color = [255, 102, 0];
	} 
		if ($color == $color_3) {
			$color = [51, 173, 255];
		} 
			if ($color == $color_4) {
				$color = [160, 252, 119];
			}
			   
// Проверка цвета на роклята

if ($color[1] > $color[0] && $color[1] > $color[2]) {
	echo "<style>
	         p {color:green;}
	      </style>
	      <p><b>Роклята е ЗЕЛЕНА</b></p>";

}

if ($color[0] > $color[1] && $color[0] > $color[2]) {
	echo "<style>
	         p {color:red;}
	      </style>
	      <p><b>Роклята е ЧЕРВЕНА</b></p>";
}

if ($color[2] > $color[0] && $color[2] > $color[1]) {
	echo "<style>
	         p {color:blue;}
	      </style>
	      <p><b>Роклята е СИНЯ</b></p>";
}