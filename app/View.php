<?php
namespace App;

class View 
{
	public static function Begin() 
	{
		echo '<!DOCTYPE html>
		<html lang="hu">
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<title>Ingatlanok</title>
		</head>
		<body>
		<main class="container pt-4">
		  <h1>Jelenleg elérhető ingatlanok</h1>
		  <section class="p-4 bg-white border shadow mb-4">
<table class="table table-striped table-hover">';
		echo '<thead><tr> 
		<th>Megnevezés</th><th>Méret</th><th>Szobák száma</th><th>Fürdőszobák száma</th><th>Emelet száma</th><th>Telek mérete</th></tr></thead><tbody>';
	}
	public static function Show($properties)
	{
		foreach ($properties as $property)
		{
			$name = $property['name'];
			$size = $property['size'];
			$rooms = $property['rooms'];
			$bathr = $property['bathr'];
			if(isset($property['floor']))
			{
				$floor = $property['floor'];
				$plot = null;
			}
			if(isset($property['plot']))
			{
				$plot = $property['plot'];
				$floor = null;
			}
		echo '<tr>
		<td>'. $name .'</td>
		<td>'. $size .'</td>
		<td>'. $rooms .'</td>
		<td>'. $bathr .'</td>
		<td>'. $floor .'</td>
		<td>'. $plot .'</td>';
		}
	}
	public static function End()
	{
		echo '</tr></tbody></table></section></main></body></html>';
	}
}
	

