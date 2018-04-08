<?php
	
	echo '<div class="page_wrapper" id="notes_page">';
	echo '<div class="page_container">';
	echo '<h1 class="LargeHeading">Notes to the Financial Statements</h1>';

	require_once('inc/mod/acc/mod_notes_nav.php');
	
	echo '<div class="tabs_holder" style="opacity: 0">';

	$counter = 1;
	
	for ($x = 0;  $x < 35; $x++ ) 
	{
		
		if ( $x % 5 == 0 )
		{
			echo '<div class="notes_tab" id="tab_' . $counter . '">';
		}
		
		echo '<section id="sec_' . ( $x + 1 ) . '">';
		
		if ( $x < 9 )
		{
			$data = 'acc/notes/note_0' . ( $x + 1 );
		}
		else {
			$data = 'acc/notes/note_' . ( $x + 1 );
		}
		
		require('inc/mod/acc/notes_content.php');

		echo '</section>';
		

		if ( ($x + 1) % 5 == 0 )
		{
			echo '</div>';
			$counter++;
		}
	}
	
	echo '</div>'; // close tab holder
	echo '</div>'; // close container
	echo '</div>'; // close wrapper
?>