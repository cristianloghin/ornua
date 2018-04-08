<html>
<head>
	<?php require_once('inc/config.php');?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="http://idb2014.local/">
	<title>
		Ornua - Annual Report 2014
		<?php
			if( isset($_GET['cat']) ) {
				echo ' - '. $categories[$_GET['cat']]; 
			}
		?>
	</title>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/modernizr.js"></script>
</head>
<body>
	<?php
		
		require_once('inc/mod/shared/mod_shared_header.php');

		if ( isset($_GET['cat']) )
		{
			$folder = $folders[$_GET['cat']][0];
			if($folder != 'gov' && $folder != 'sus')
			{
				$id = $folders[$_GET['cat']][1][$_GET['id']];
				echo '<div class="large_submenu">';
				require('inc/mod/shared/mod_shared_submenu.php');
				echo '</div>';
				require_once('inc/page/' . $folder . '/' . $folder . '_' . $id . '.php');
				$page_id = $_GET['id'];

				echo '<div class="small_submenu">';
				echo '<p>In this section:</p>';
				require('inc/mod/shared/mod_shared_submenu.php');
				echo '</div>';
			}
			else
			{
				require_once('inc/page/' . $folder . '/' . $folder . '.php');
				$page_id = $_GET['cat'];
			}
		}
		else
		{
			require_once('inc/page/home.php');
			$page_id = 'home';
		}
		require_once('inc/mod/shared/mod_shared_footer.php');
	?>
	<script>
	$(function() {
		init_scripts('<?php echo $page_id ?>');
	});
	</script>
</body>
</html>