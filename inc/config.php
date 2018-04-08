<?php


	$bus_submenu = array(
		array(	'name'		=> 'Our Business',
				'slug'		=> 'our-business',
				'id'		=> '01'
		),
		array(	'name'		=> 'Our Global Footprint',
				'slug'		=> 'global-footprint',
				'id'		=> '02'
		),
		array(	'name'		=> 'Global Business Reports',
				'slug'		=> 'global-business',
				'id'		=> '03'
		),
		array(	'name'		=> 'Chairman&rsquo;s Statement',
				'slug'		=> 'chairman-statement',
				'id'		=> '04'
		),
		array(	'name'		=> 'Chief Executive&rsquo;s Report',
				'slug'		=> 'chief-executive-report',
				'id'		=> '05'
		),
		array(	'name'		=> 'New Product Development',
				'slug'		=> 'new-product',
				'id'		=> '06'
		)
	);

	$acc_submenu = array(
		array(	'name'		=> 'Directors&rsquo; Report',
				'slug'		=> 'directors-report',
				'id'		=> '01'
		),
		array(	'name'		=> 'Independent Auditors Report',
				'slug'		=> 'auditors-report',
				'id'		=> '02'
		),
		array(	'name'		=> 'Group Profit &amp; Loss Account',
				'slug'		=> 'profit-and-loss',
				'id'		=> '03'
		),
		array(	'name'		=> 'Group Balance Sheet',
				'slug'		=> 'balance-sheet',
				'id'		=> '04'
		),
		array(	'name'		=> 'Group Cash Flow Statement',
				'slug'		=> 'cash-flow-statement',
				'id'		=> '05'
		),
		array(	'name'		=> 'Statement of Total Recognised Gains &amp; Losses',
				'slug'		=> 'gains-and-losses',
				'id'		=> '06'
		),
		array(	'name'		=> 'Notes to the Financial Statements',
				'slug'		=> 'notes',
				'id'		=> '07'
		)
	);

	$supp_submenu = array(
		array(	'name'		=> 'Board of Directors, Executive &amp; Senior Management',
				'slug'		=> 'management',
				'id'		=> '01'
		),
		array(	'name'		=> 'Goup Five Year Review',
				'slug'		=> 'five-year-review',
				'id'		=> '02'
		),
		array(	'name'		=> 'Irish Product Utilisation Overview',
				'slug'		=> 'irish-product-utilisation',
				'id'		=> '03'
		)
	);

	$structure = array(
		array(	'name'		=> 'Business Review',
				'type'    	=> 'multi',
				'slug'		=> 'business-review',
				'folder'	=> 'bus',
				'submenu'	=> $bus_submenu
		), 
		array(	'name'		=> 'Sustainability',
				'type'		=> 'single',
				'slug'		=> 'sustainability',
				'folder'	=> 'sus'
		),
		array(	'name'		=> 'Corporate Governance',
				'type'		=> 'single',
				'slug'		=> 'corporate-governance',
				'folder'	=> 'gov'
		),
		array(	'name'		=> 'Financial Statements',
				'type'		=> 'multi',
				'slug'		=> 'financial-statements',
				'folder'	=> 'acc',
				'submenu'	=> $acc_submenu
		),
		array(	'name'		=> 'Supplementary Information',
				'type'		=> 'multi',
				'slug'		=> 'supplementary-information',
				'folder'	=> 'supp',
				'submenu'	=> $supp_submenu
		)
	);

	$folders = array();

	foreach ($structure as $item)
	{
		if ( $item[type] == 'single' )
		{
			$folders[$item['slug']] = array(
				$item['folder']
			);
		}
		else
		{
			$array = array();
			foreach ($item['submenu'] as $sub_item)
			{
				$array[$sub_item['slug']] = $sub_item['id'];
			}

			$folders[$item['slug']] = array(
				$item['folder'],
				$array
			);
		}
	}

?>