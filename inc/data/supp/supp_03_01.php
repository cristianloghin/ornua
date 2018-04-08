<?php
	$colors = array(
		'grass_green' => '#58A618',
		'meadow_green' => '#92D400',
		'moss_green' => '#009B48',
		'stone_grey' => '#8B8D8E',
		'buttercup_yellow' => '#F1E800',
		'sky_blue' => '#8FCAE7'
	);
	$data = array(
		'title' => '2014 IDB Sales from Ireland by Destination',
		'unit' => '%',
		'segments' => array(
			array( 'label' => 'UK', 'value' => 29, 'color' => $colors['moss_green'] ),
			array( 'label' => 'EU', 'value' => 27, 'color' => $colors['grass_green'] ),
			array( 'label' => 'North America', 'value' => 5, 'color' => $colors['meadow_green'] ),
			array( 'label' => 'Africa', 'value' => 21, 'color' => $colors['stone_grey'] ),
			array( 'label' => 'Central &amp; South America', 'value' => 5, 'color' => $colors['buttercup_yellow'] ),
			array( 'label' => 'Rest of world', 'value' => 12, 'color' => $colors['sky_blue'] )
		)
	);
	$id = 1;
	require('inc/mod/shared/mod_shared_info_3.php');
	$data = array(
		'title' => 'Irish Whole Milk Utilisation 2014',
		'unit' => '%',
		'segments' => array(
			array( 'label' => 'Butter', 'value' => 65, 'color' => $colors['grass_green'] ),
			array( 'label' => 'Cheese', 'value' => 32, 'color' => $colors['meadow_green'] ),
			array( 'label' => 'WMP', 'value' => 3, 'color' => $colors['buttercup_yellow'] )
		)
	);
	$id = 2;
	require('inc/mod/shared/mod_shared_info_3.php');
?>
<div style="width: 100%; height: 0; clear:both"></div>