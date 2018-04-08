<div class="submenu" id="<?php echo $_GET['cat']; ?>">
	<nav>
		<ul>
			<?php
				$category = $_GET['cat'];
				foreach ($structure as $item)
				{
					if ($item['slug'] == $category)
					{
						$submenu = $item['submenu'];
					}
				}
				foreach( $submenu as $item ) {
					if( $_GET['id'] == $item['slug'])
					{
						echo '<li class="active"><a href="' . $category . '/' . $item['slug'] . '.html">' . $item['name'] . '</a><span></span></li>';
					} else
					{
						echo '<li><a href="' . $category . '/' . $item['slug'] . '.html">' . $item['name'] . '</a><span></span></li>';
					}
				}
			?>
		</ul>
	</nav>
</div>