<?php
	$sections = array(
		array( 'data' => 'bus/bus_03_01', 'module' => 'shared/mod_shared_banner'),
		array( 'data' => 'bus/bus_03_02', 'module' => 'bus/mod_bus_con'),
		array( 'data' => 'bus/bus_03_03', 'module' => 'bus/mod_bus_con'),
		array( 'data' => 'bus/bus_03_04', 'module' => 'shared/mod_shared_banner'),
		array( 'data' => 'bus/bus_03_05', 'module' => 'bus/mod_bus_con'),
		array( 'data' => 'bus/bus_03_06', 'module' => 'bus/mod_bus_con'),
		array( 'data' => 'bus/bus_03_07', 'module' => 'shared/mod_shared_banner'),
		array( 'data' => 'bus/bus_03_08', 'module' => 'bus/mod_bus_con'),
	);
	$counter = 1;
	echo '<div class="bus_page" id="bus_03_page">';
	echo '<div class="page_container">';
	echo '<div><h1 class="LargeHeading">IDB Global Business Reports</h1></div>';
	
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