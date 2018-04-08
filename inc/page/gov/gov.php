<?php
	$sections = array(
		array( 'data' => 'gov/gov_01_01', 'module' => 'gov/mod_gov_con'),
		array( 'data' => 'gov/gov_01_02', 'module' => 'gov/mod_gov_info'),
		array( 'data' => 'gov/gov_01_03', 'module' => 'gov/mod_gov_con')
	);
	$counter = 1;
	echo '<div class="page_wrapper" id="gov_page">';
	echo '<div class="page_container">';
	echo '<h1 class="LargeHeading">Corporate Governance</h1>';
	
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