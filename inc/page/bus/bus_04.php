<?php
	$sections = array(
		array( 'data' => 'bus/bus_04_01', 'module' => 'shared/mod_shared_banner'),
		array( 'data' => 'bus/bus_04_02', 'module' => 'bus/mod_bus_con')
	);
	$counter = 1;
	echo '<div class="bus_page" id="bus_04_page">';
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