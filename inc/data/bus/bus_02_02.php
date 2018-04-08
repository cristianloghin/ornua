<div class="slide">
	<div class="contents">
		<div>
			<div class="row">
				<div class="cell">
					<div class="image">
						<img src="img/mk-pos-1.jpg">
					</div>
					<div class="text">
						<p class="large">No.1</p>
						<p>No.1 butter brand in Germany<p>
						<p>26% year-on-year revenue growth</p>
					</div>
				</div>
				<div class="cell">
					<div class="image">
						<img src="img/mk-pos-2.jpg">
					</div>
					<div class="text">
						<p class="large">No.1</p>
						<p>No.1 imported butter in the US<p>
						<p>Over 3 million Kerrygold tastings a year in the US</p>
					</div>
				</div>
				<div style="width: 100%; height: 0; clear: both"></div>
			</div>
			<div class="row">
				<div class="cell">
					<div class="image">
						<img src="img/mk-pos-3.jpg">
					</div>
					<div class="text">
						<p class="large">Millions</p>
						<p>100s of millions of packets of Kerrygold butter sold each year</p>
					</div>
				</div>
				<div class="cell">
					<div class="image">
						<img src="img/mk-pos-4.jpg">
					</div>
					<div class="text">
						<p class="large">No.2</p>
						<p>Pilgrims Choice is No. 2 cheddar cheese brand in the UK</p>
					</div>
				</div>
				<div style="width: 100%; height: 0; clear: both"></div>
			</div>
		</div>
	</div>
</div>
<div class="slide">
	<div class="contents">
		<div>
			<?php
				$modules = array(
					array( 'icon' => 'market', 'text' => 'Exports to over 110 countries worldwide' ),
					array( 'icon' => 'euro', 'text' => 'Over &euro;2.3 billion Turnover' ),
					array( 'icon' => 'milk', 'text' => 'Ireland&rsquo;s largest dairy exporter' ),
					array( 'icon' => 'people', 'text' => 'Over 3,000 staff globally' ),
					array( 'icon' => 'calendar', 'text' => 'Over 50 years&rsquo; experience' )
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