<?php
	$sections = array(
		array( 'data' => 'bus/bus_06_01', 'module' => 'bus/mod_bus_con'),
		array( 'data' => 'bus/bus_06_02', 'module' => 'bus/mod_bus_con'),
		array( 'data' => 'bus/bus_06_03', 'module' => 'bus/mod_bus_con'),
		array( 'data' => 'bus/bus_06_04', 'module' => 'bus/mod_bus_con')
	);
	$counter = 1;
	echo '<div class="bus_page" id="bus_06_page">';
	echo '<div class="page_container">';
	
	foreach ($sections as $section)
	{
		echo '<section id="sec_' . $counter . '">';
		$data = $section['data'];
		require('inc/mod/' . $section['module'] . '.php');
		echo '</section>';
		$counter++;
	}
	echo '</div>'; // close container
	echo '</div>'; // close wrapper
?>