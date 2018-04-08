<?php
	$sections = array(
		array( 'data' => 'acc/acc_02_01', 'module' => 'acc/mod_acc_txt')
	);
	$counter = 1;
	echo '<div class="page_wrapper" id="acc_page">';
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