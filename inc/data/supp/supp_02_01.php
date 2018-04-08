<?php
	$title = 'Group Turnover - &euro;2&comma;340 million';
	$data = array(
		'v_labels' => array( '2014', '2013', '2012', '2011', '2010' ),
		'h_labels' => array('1&comma;900m', '2&comma;000m', '2&comma;100m', '2&comma;200m', '2&comma;300m', '2&comma;400m'),
		'values' => array(87, 43, 26, 16, 6) 
	);

	require('inc/mod/shared/mod_shared_info_2.php');

	$title = 'Members&rsquo; funds - &euro;435 million';
	$data = array(
		'v_labels' => array( '2014', '2013', '2012', '2011', '2010' ),
		'h_labels' => array('350m', '375m', '400m', '425m', '450m'),
		'values' => array(84, 65, 54, 57, 52) 
	);

	require('inc/mod/shared/mod_shared_info_2.php');

	echo '<div style="width: 100%; height: 0; clear: both"></div>';
?>