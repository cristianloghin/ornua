<?php
	$sections = array(
		array( 'data' => 'supp/supp_03_01', 'module' => 'supp/mod_supp_con'),
		array( 'data' => 'supp/supp_03_02', 'module' => 'supp/mod_supp_con'),
		array( 'data' => 'supp/supp_03_03', 'module' => 'supp/mod_supp_con'),
		array( 'data' => 'supp/supp_03_04', 'module' => 'supp/mod_supp_con'),
		array( 'data' => 'supp/supp_03_05', 'module' => 'supp/mod_supp_con')
	);
	$counter = 1;
	echo '<div class="supp_page" id="supp_03_page">';
	echo '<div class="page_container">';
	echo '<h1 class="LargeHeading">Irish Product Utilisation Overview</h1>';
	
	foreach ($sections as $section)
	{
		echo '<section id="sec_' . $counter . '">';
		$data = $section['data'];
		require('inc/mod/' . $section['module'] . '.php');
		echo '</section>';
		$counter++;
	}
	echo '</div>';
	echo '</div>'; // close container
?>