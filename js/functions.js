function init_scripts(tag) {
	switch (tag) {
		case 'home':
			init_home();
			break;
		case 'our-business' : 
			init_our_business();
			break;
		case 'global-footprint':
			init_global_footprint();
			break;
		case 'global-business' :
			init_global_business();
			break;
		case 'chairman-statement':
			init_chairman();
			break;
		case 'chief-executive-report':
			init_ceo();
			break;
		case 'sustainability':
			init_sus();
			break;
		case 'corporate-governance':
			init_gov();
			break;
		case 'notes':
			init_notes();
			break;
		case 'irish-product-utilisation':
			init_piecharts();
			break;
	}
	add_listeners();
	init_menus();
	tab_accounts();
}
function calc_slide_height(slider) {

	slider_height = 0;
	slider.children().each(function() {
		
		if( slider_height < $(this).height() ) {
			slider_height = $(this).height();
		}

	});
	
	slider.find('.slide').each(function(){

		$(this).height( slider_height );
	});
	
}
jQuery.fn.extend({
	slider : function(settings) {
		
		var slider = settings.target;
		var slides_no = slider.children().length;
		var current_slide = 1;
		
		function move_slides(dir) {
			
			current_slide = current_slide + dir;

			if (current_slide == 1)
			{
				slider.find('.slider_title').removeClass('alt');
				nav.find('.next_bt').fadeIn(300);
				nav.find('.prev_bt').fadeOut(300);
			}
			else if ( current_slide == slides_no )
			{
				slider.find('.slider_title').addClass('alt');
				nav.find('.prev_bt').fadeIn(300);
				nav.find('.next_bt').fadeOut(300);
			}
			else
			{
				slider.find('.slider_title').addClass('alt');
				nav.find('.prev_bt').fadeIn(300);
				nav.find('.next_bt').fadeIn(300);
			}
		
			var value = -(100 * (current_slide - 1)) + '%';

			slider.find('.banner_slider_control').animate(
			{
				'margin-left' : value
			}, 800);

			if ( settings.flexi )
			{
				var new_height = slider.find( '.slide:nth-child(' + current_slide + ')' ).height();

				slider.find('.banner_slider_wrapper').animate(
				{
					'height' : new_height
				}, 500);
			}
			slider.find('.current').removeClass('current');
			slider.find( '.slide:nth-child(' + current_slide + ')' ).addClass('current');
		}

		slider.children().wrapAll('<div class="banner_slider_wrapper"><div class="banner_slider_control"></div></div>');
		
		slider.append('<div class="slider_nav"><div class="nav_wrapper"></div></div>');
		var nav = slider.find('.nav_wrapper');
		nav.prepend('<div class="prev_bt"><span class="icon-arrow-prev" data-direction="-1"></span></div>').append('<div class="next_bt"><span class="icon-arrow-next" data-direction="1"></span></div>');

		slider.find('.banner_slider_wrapper').css(
		{
			'width' : '100%',
			'overflow' : 'hidden',
			'position' : 'relative',
		});

		if ( settings.flexi )
		{
			$(window).load(function() {
				var height = slider.find('.slide:first-child').height();
				slider.find('.banner_slider_wrapper').height( height );
			});
		}

		slider_width = slides_no * 100 + '%';
		slide_width = 100 / slides_no + '%';
		slider.find('.banner_slider_control').css(
		{
			'width' : slider_width
		});
		slider.find('.slide').each(function(){
			$(this).css('width', slide_width);
		});

		nav.find('span').click(function() {
			move_slides( eval($(this).data('direction')) );
		});

		if(settings.title) {
			slider.prepend('<div class="slider_title"><div><h2 class="LargeHeading">' + settings.title_text + '</h2></div></div>');
		}
	}
});

jQuery.fn.extend({
	tab_slider : function(settings)
	{
		var slider = settings.target;
		var slides_no = slider.find('.nav ul').children().length;
		var width = ( slides_no * 100 ) + '%';
		var slide_width = ( 100 / slides_no ) + '%';
		var height = slider.find('.slide:first-child').height();
		
		slider.find('.slides').children().wrapAll('<div class="slides_wrapper"><div class="control"></div></div>');
		slider.find('.slides_wrapper').css(
		{
			'width' : '100%',
			'overflow' : 'hidden',
			'position' : 'relative',
			'height' : height
		});

		slider.find('.control').css(
		{
			'width' : width
		});
		slider.find('.slide').each(function ()
		{
			$(this).css('width', slide_width );
		});

		function show_tab(id)
		{
			var no = Number( id.slice(4) ) - 1;
			var value = - ( slider.find('.control').width() / slides_no ) * no;
			var height = slider.find( '#' + id ).height();

			slider.find('.control').animate(
			{
				'margin-left' : value
			}, 800);

			slider.find('.slides_wrapper').animate(
			{
				'height' : height
			}, 500);

		}

		slider.find('.nav ul li').click( function()
		{
			id = $(this).data('id');
			show_tab(id);
			slider.find('.nav ul li.active').removeClass('active');
			$(this).addClass('active');
		});
	}
});

jQuery.fn.extend({
	piechart : function(data)
	{
		
		var chart = data.target;
		var dataset = [];
		var colist = [];
		var segments = data.segments;
		
		for (i = 0; i < segments; i++) {
			dataset.push( data.dataset.segments[i].value );
			colist.push( data.dataset.segments[i].color )
		}

		var canvas_id = 'can' + chart.attr('id').substr(3);
		chart.find('.chart').append('<canvas id="' + canvas_id + '" width="' + chart.find('.chart').width() + '" height="' + chart.find('.chart').height() + '"></canvas>')

		function pie( ctx, w, h, dataset )
		{
			var radius = h / 2 - 5;
			var centerx = w / 2;
			var centery = h / 2;
			var total = 0;
			for (x = 0; x < dataset.length; x++)
			{
				total += dataset[x];
			}; 
			var lastend = 0;
			var offset = Math.PI / 2;
			for (x = 0; x < dataset.length; x++)
			{
				var thispart = dataset[x]; 
				ctx.beginPath();
				ctx.fillStyle = colist[x];
				ctx.moveTo(centerx,centery);
				var arcsector = Math.PI * (2 * thispart / total);
				ctx.arc(centerx, centery, radius, lastend - offset, lastend + arcsector - offset, false);
				ctx.lineTo(centerx, centery);
				ctx.fill();
				ctx.closePath();		
				lastend += arcsector;	
			}
			if (data.style == 'donut')
			{
				ctx.beginPath();
				ctx.fillStyle = 'white';
				ctx.moveTo(centerx,centery);
				ctx.arc(centerx, centery, radius / 2, 0, 2*Math.PI);
				ctx.fill();
				ctx.closePath();
			}
		}

		var c = document.getElementById(canvas_id);
		var ctx = c.getContext('2d');
		
		pie(ctx, c.width, c.height, dataset);


	}
});


// Listener for width changes

function add_listeners() {
	$(window).resize(function() {
		flag = false;
		setTimeout(function() {
			if(!flag)
			{
				var height = $('#bus_02_page').find('#sec_1').find('.mod_shared_banner').find('.current').height();
				$('#bus_02_page').find('#sec_1').find('.mod_shared_banner .banner_slider_wrapper').animate({
					'height' : height
				})
				if($(window).innerWidth() >= 1200)
				{
					$('.main_menu').show(); // main menu
					if ( $('.submenu-toggle').hasClass('active') )
					{
						$('.control_menu').show();
					}
				}
				else
				{
					$('.control_menu').hide();
					$('.main_menu').hide();
					$('.toggle_menu').removeClass('icon-close-menu').addClass('icon-open-menu');
				}
				flag = true;
			}
		}, 300);
	})
}

//Shared menu behaviour 

function init_menus() {
	
	$('.toggle_menu').click(function(){
		$(this).toggleClass('icon-open-menu icon-close-menu');
		$('nav.main_menu').slideToggle(300);
	});

	// submenu drop downs
	$('.submenu-toggle').click(function()
	{
		var target_id = $(this).data('id');
		
		if ($('.submenu-toggle').hasClass('active') )
		{
			
			if( $('.submenu-toggle.active').data('id') == target_id )
			{
				$('#' + target_id).slideUp(150);
				$(this).removeClass('active');
				$('.control_menu').hide();
			}
			else
			{
				var open_id = $('.submenu-toggle.active').data('id');
				$('#' + open_id).slideUp(150);
				$('.submenu-toggle.active').removeClass('active');
				$('#' + target_id).slideDown(150);
				$(this).addClass('active');
			}
		}
		else
		{
			$('#' + target_id).slideDown(150);
			$(this).addClass('active');
			if($(window).innerWidth() >= 1200)
			{
				$('.control_menu').show();
			}
		}

		$('.control_menu').click( function()
		{
			var open_id = $('.submenu-toggle.active').data('id');
			$( '#' + open_id ).slideUp(150);
			$('.submenu-toggle.active').removeClass('active');
			$(this).hide();
			
		})
		
	});

	
	$(window).scroll(function() {
		if ($('.large_submenu').is(':visible'))
		{
			if ( $(window).scrollTop() > 200 )
			{
				$('.large_submenu').addClass('fixed');
				$('header').css('padding-bottom', '40px');
			} else {
				$('.large_submenu').removeClass('fixed');
				$('header').css('padding-bottom', '0');
			}
		}
	});
}

// Homepage Scripts

function init_home() {
	$('#sec_1 .mod_shared_banner').slider({
		'target' : $('#sec_1 .mod_shared_banner'),
		'fixed' : true
	});
	$('#sec_2 .mod_shared_banner').slider({
		'target' : $('#sec_2 .mod_shared_banner'),
		'fixed' : true
	});
	$('#sec_3 .mod_shared_banner').slider({
		'target' : $('#sec_3 .mod_shared_banner'),
		'title' : true,
		'title_text': 'Operational Highlights'
	});
}

// Business scripts

function init_our_business() {
	$('#sec_1 .mod_shared_banner').slider({
		'target' : $('#sec_1 .mod_shared_banner')
	})

	$('#tab-slider-1').tab_slider({
		'target' : $('#tab-slider-1')
	})

	$('.mod_shared_info_4#pie-1').piechart(
	{
		'target' : $('.mod_shared_info_4#pie-1'),
		'dataset' : data_set_1,
		'segments' : 3,
		'style' : 'donut'
	});
	$('.mod_shared_info_4#pie-2').piechart(
	{
		'target' : $('.mod_shared_info_4#pie-2'),
		'dataset' : data_set_2,
		'segments' : 3,
		'style' : 'donut'
	});
	$('.mod_shared_info_4#pie-3').piechart(
	{
		'target' : $('.mod_shared_info_4#pie-3'),
		'dataset' : data_set_3,
		'segments' : 3,
		'style' : 'donut'
	});

	$('#sec_2 .item').click(function()
	{
		id = $(this).data('id').slice(4);
				
		if ( $(this).parent().find('.more').is(':visible') )
		{
			if ( $(this).parent().find('.active-txt').attr('id') == ('txt-' + id) )
			{
				$(this).parent().find('.more').slideUp(300, function()
				{
					$('#txt-' + id).hide().removeClass('active-txt');
				})
			} 
			else
			{
				$(this).parent().find('.more').slideUp(300, function()
				{
					$(this).parent().find('.active-txt').hide().removeClass('active-txt');
					$('#txt-' + id).show().addClass('active-txt');
					$(this).parent().find('.more').slideDown();
				})
			}
		}
		else 
		{
			$('#txt-' + id).show().addClass('active-txt');
			$(this).parent().find('.more').slideDown();
		}

	});
}

function init_global_footprint() {
	$('#sec_1 .mod_shared_banner').slider({
		'target' : $('#sec_1 .mod_shared_banner'),
		'flexi' : true
	});
	$('#sec_2 .mod_shared_banner').slider({
		'target' : $('#sec_2 .mod_shared_banner'),
		'title' : true,
		'title_text': 'Market Position'
	});
	$('#graphs-slider').slider({
		'target': $('#graphs-slider')
	})
}

function init_global_business() {
	$('#sec_1 .mod_shared_banner').slider({
		'target' : $('#sec_1 .mod_shared_banner')
	});
	$('#tab-slider-1').tab_slider({
		'target' : $('#tab-slider-1')
	})
	$('#sec_4 .mod_shared_banner').slider({
		'target' : $('#sec_4 .mod_shared_banner')
	});
	$('#tab-slider-2').tab_slider({
		'target' : $('#tab-slider-2')
	})
	$('#sec_7 .mod_shared_banner').slider({
		'target' : $('#sec_7 .mod_shared_banner')
	});
}

function init_chairman() {
	$('#sec_1 .mod_shared_banner').slider({
		'target' : $('#sec_1 .mod_shared_banner')
	})
}

function init_ceo() {
	$('#sec_1 .mod_shared_banner').slider({
		'target' : $('#sec_1 .mod_shared_banner')
	})
}

// Corporate Governance scripts
function init_gov() {
	$('.toggle').click( function()
	{
		$(this).toggleClass('icon-plus-circle icon-minus-circle');
		$('.infographic').slideToggle();
	});
}

//Accounts Tabbed (EXPERIMENTAL)

function tab_accounts()
{
	$('td').each(function()
	{
		if($(this).hasClass('AccountsTabbed') || $(this).hasClass('AccountsTabbedBold'))
		{
			if($(this).html() != '')
			{
				var value = $(this).html();
				var index = value.lastIndexOf(')');
				if ( index != -1 )
				{
					var new_val = value.substring(0, index) + '<span>)</span>';
				}
				
				$(this).html(new_val);
			}
		}
	})
} 

// Notes to the financial statements scripts
function init_notes() {

	var active_slide = 1;
	var position = 0;

	function move_tab( value, height ) {
		$('.tabs_slider_control').animate(
		{
			'margin-left' : value
		}, 800);

		$('.tabs_slider_wrapper').animate(
		{
			'height' : height
		}, 500);
	}

	function show_tab(id)
	{
		no = Number(id.slice(4)) - 1;
		unit = Math.round($('.tabs_slider_control').width() / 7);
		value = - unit * no;
		height = $('.notes_tab#'+id).height();

		move_tab(value, height);
		
	}

	$('.tabs_holder').children().wrapAll('<div class="tabs_slider_wrapper"><div class="tabs_slider_control"></div></div>');
	$('.tabs_slider_wrapper').css(
	{
		'width' : '100%',
		'overflow' : 'hidden',
		'position' : 'relative'
	});
	$('.tabs_slider_control').css(
	{
		'width' : '700%'
	});
	$('.tabs_holder').css('opacity', 1);

	$('.notes_tab_button').click( function()
	{
		id = $(this).data('id');
		show_tab(id);
		$('.notes_tab_button.active').removeClass('active');
		$(this).addClass('active');
	});

	table_slider = $('.big_table_wrapper');
	table_slider.children().wrapAll('<div class="control"></div>');
	table_slider.append('<div class="nav"><div class="left"><span class="icon-arrow-prev"></span></div><div class="right"><span class="icon-arrow-next"></span></div></div>');
	slider_width = table_slider.find('.control').width();
	table_width = table_slider.find('table').width();
	table_slider.find('.right span').click(function()
	{
		table_slider.find('.control').animate({
			'margin-left' : slider_width - table_width
		},
		300, function()
		{
			table_slider.find('.right').fadeOut(150);
			table_slider.find('.left').fadeIn();
		})
	})

	table_slider.find('.left span').click(function()
	{
		table_slider.find('.control').animate({
			'margin-left' : 0
		},
		300, function()
		{
			table_slider.find('.left').fadeOut(150);
			table_slider.find('.right').fadeIn();
		})
	})
}

// Sustainability scripts

function init_sus() {
	$('.mod_shared_banner').slider({
		'target' : $('.mod_shared_banner'),
		'fixed' : true
	});
}

// Product Utilisation Scripts
function init_piecharts()
{
	$('.mod_shared_info_3#pie-1').piechart(
	{
		'target' : $('.mod_shared_info_3#pie-1'),
		'dataset' : data_set_1,
		'segments' : 6
	});
	$('.mod_shared_info_3#pie-2').piechart(
	{
		'target' : $('.mod_shared_info_3#pie-2'),
		'dataset' : data_set_2,
		'segments' : 3
	});
}