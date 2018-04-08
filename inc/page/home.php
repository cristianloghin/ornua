<?php
	$sections = array(
		array( 'data' => 'home/home_01_01', 'module' => 'shared/mod_shared_banner'),
		array( 'data' => 'home/home_01_02', 'module' => 'shared/mod_shared_banner'),
		array( 'data' => 'home/home_01_03', 'module' => 'shared/mod_shared_banner'),
		array( 'data' => 'home/home_01_04', 'module' => 'home/mod_home_sec')
	);
	$counter = 1;
	echo '<div class="page_wrapper" id="home_page">';
	echo '<div class="page_container">';
	// echo '<h1 class="LargeHeading">Sustainability</h1>';
	
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