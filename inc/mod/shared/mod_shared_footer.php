<footer>
	<div class="contents">
		<a href="/" class="logo-footer"></a>
		<p>Annual Report 2014</p>
		<nav class="footer_menu">
			<div class="download_link"><a href="img/Ornua--Annual-Report--2014.pdf" target="_blank">Download<span class="hidden"> Annual Report</span> (pdf)<span class="icon-download"></span></a></div>
			<ul>
				<li><a href="/">Home</a></li>
				<?php
					foreach ($structure as $item)
					{
						if ($item['type'] == 'single')
						{
							echo '<li>';
							echo '<a href="' . $item['slug'] . '.html">' . $item['name'] . '</a>';
							echo '</li>';
						}
						else
						{
							echo '<li>';
							echo '<a href="' . $item['slug'] . '/' . $item['submenu'][0]['slug'] . '.html">' . $item['name'] . '</a>';
							echo '</li>';
						}
					}
				?>
			</ul>
		</nav>
		<div class="credits">
			<a href="http://www.idb.ie/">&copy; IDB 2014</a> / 
			<a href="http://www.sourcedesign.ie/" target="_blank">Site design: Source Design</a>
		</div>
	</div>
	<div class="hill"><img src="img/hill-footer.png"></div>

</footer>