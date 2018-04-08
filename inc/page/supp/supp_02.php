<?php
	$sections = array(
		array( 'data' => 'supp/supp_02_01', 'module' => 'supp/mod_supp_con'),
		array( 'data' => 'supp/supp_02_02', 'module' => 'supp/mod_supp_con')
	);
	$counter = 1;
	echo '<div class="supp_page" id="supp_02_page">';
	echo '<div class="page_container">';
	echo '<h1 class="LargeHeading">Group Five Year Review</h1>';
	
	foreach ($sections as $section)
	{
		echo '<section id="sec_' . $counter . '">';
		$data = $section['data'];
		require('inc/mod/' . $section['module'] . '.php');
		echo '</section>';
		$counter++;
	}
	echo '</div>'; // close container
	echo '</div>';
?>