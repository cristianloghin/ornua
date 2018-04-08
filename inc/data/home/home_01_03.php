<div class="slide">
	<div class="contents">
		<div class="content_box_1">
		<?php
			
			$modules = array(
				array(
					'title' => 'Group Turnover',
					'big' => '10%',
					'dates' => array('2014', '2013'),
					'values' => array('&euro;2&comma;340m', '&euro;2&comma;124m')
				),
				array(
					'title' => 'Operating Surplus / EBIT',
					'big' => '17%',
					'dates' => array('2014', '2013'),
					'values' => array('&euro;30&period;3m', '&euro;25&period;8m')
				),
				array(
					'title' => 'Net Assets',
					'big' => '4%',
					'dates' => array('2014', '2013'),
					'values' => array('&euro;436m', '&euro;417m')
				),
				array(
					'title' => 'Members&rsquo; Bonuses',
					'big' => '9%',
					'dates' => array('2014', '2013'),
					'values' => array('&euro;12&period;0m', '&euro;11&period;0m')
				)
			);
		
			foreach ($modules as $module) {
				$title = $module['title'];
				$big = $module['big'];
				$date_1 = $module['dates'][0];
				$date_2 = $module['dates'][1];
				$value_1 = filter_var($module['values'][0], FILTER_SANITIZE_NUMBER_INT);
				$value_1_txt = $module['values'][0];
				$value_2 = filter_var($module['values'][1], FILTER_SANITIZE_NUMBER_INT);
				$value_2_txt = $module['values'][1];
				$flag = true;
				require('inc/mod/shared/mod_shared_info_1.php');
			}
		?>
		</div>
	</div>
</div>
<div class="slide">
	<div class="contents">
		<div class="icon_box_1">
		<?php
			$modules = array(
				array( 'icon' => 'value', 'text' => '<span class="title">Value Added Food Ingredients</span>Opening of state-of-art facility at Thiel Cheese & Ingredients marks completion of $80 million expansion programme in the US Food Ingredients business.' ),
				array( 'icon' => 'quality', 'text' => '<span class="title">Centre of Excellence for Kerrygold</span>Planning approved for new fully integrated butter production and packing facility for Kerrygold in Mitchelstown, Co. Cork.' ),
				array( 'icon' => 'market', 'text' => '<span class="title">Route to Market</span>Acquisition of a Spanish cheese business and the formation of IDB España. Acquisition of the business of FoodTec UK Limited, a specialist ingredients business in the UK.' )
			);
			foreach ($modules as $module) {
				$icon = $module['icon'];
				$text = $module['text'];
				require('inc/mod/shared/mod_shared_ico_txt.php');
			}	
		?>
		</div>
	</div>
</div>