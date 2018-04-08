<?php
	$sections = array(
		array( 'data' => 'bus/bus_02_01', 'module' => 'shared/mod_shared_banner'),
		array( 'data' => 'bus/bus_02_02', 'module' => 'shared/mod_shared_banner'),
		array( 'data' => 'bus/bus_02_03', 'module' => 'bus/mod_bus_con')
	);
	$counter = 1;
	echo '<div class="bus_page" id="bus_02_page">';
	echo '<div class="page_container">';
	echo '<div><h1 class="LargeHeading">Our Global Footprint</h1></div>';

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