<header>
	<div>
		<a href="/" class="logo"></a>
		<span>Annual Report 2014</span>
		<span class="toggle_menu icon-open-menu"></span>
	</div>
	<nav class="main_menu">
		<ul>
			<li><a href="/">Home</a></li>
			<?php
				foreach ($structure as $item)
				{
					echo '<li>';
					if ($item['type'] == 'single')
					{
						echo '<a href="' . $item['slug'] . '.html">' . $item['name'] . '</a>';
					}
					else
					{
						echo '<a class="submenu-toggle" data-id="submenu-' . $item['slug'] . '">' . $item['name'] . '<span class="icon-arrow-down"></span></a>';
						echo '<ul class="submenu" id="submenu-' . $item['slug'] . '">';
						foreach ( $item['submenu'] as $sub_item )
						{
							echo '<li><a href="' . $item['slug'] . '/' . $sub_item['slug'] . '.html">' .$sub_item['name']. '</a></li>';
						}
						echo '</ul>'; // close submenu
					}
					echo '</li>';
				}
			?>
		</ul>
		<div class="download_link"><a href="img/Ornua--Annual-Report--2014.pdf" target="_blank">Download Annual Report (pdf)<span class="icon-download"></span></a></div>
	</nav>
</header>
<div class="control_menu"></div>