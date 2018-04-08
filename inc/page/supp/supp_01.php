<?php
	$sections = array(
		array( 'data' => 'supp/supp_01_01', 'module' => 'supp/mod_supp_con'),
		array( 'data' => 'supp/supp_01_02', 'module' => 'supp/mod_supp_con'),
		array( 'data' => 'supp/supp_01_03', 'module' => 'supp/mod_supp_con')
	);
	$counter = 1;
	echo '<div class="supp_page" id="supp_01_page">';
	echo '<div class="page_container">';
	
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