(function() {
	'use strict';
	// Self Initialize DOM Factory Components
	domFactory.handler.autoInit()

	// Connect button(s) to drawer(s)
	var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')
	sidebarToggle = Array.prototype.slice.call(sidebarToggle)

	sidebarToggle.forEach(function(toggle) {
		toggle.addEventListener('click', function(e) {
			var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
			var drawer = document.querySelector(selector)
			if (drawer) {
				drawer.mdkDrawer.toggle()
			}
		})
	})

	let drawers = document.querySelectorAll('.mdk-drawer')
	drawers = Array.prototype.slice.call(drawers)
	drawers.forEach((drawer) => {
		drawer.addEventListener('mdk-drawer-change', (e) => {
			if (!e.target.mdkDrawer) {
				return
			}
			document.querySelector('body').classList[e.target.mdkDrawer.opened ? 'add' : 'remove']('has-drawer-opened')
			let button = document.querySelector('[data-target="#' + e.target.id + '"]')
			if (button) {
				button.classList[e.target.mdkDrawer.opened ? 'add' : 'remove']('active')
			}
		})
	})

	// SIDEBAR COLLAPSE MENUS
	$('.sidebar .collapse').on('show.bs.collapse', function(e) {
		e.stopPropagation()
		var parent = $(this).parents('.sidebar-submenu').get(0) || $(this).parents('.sidebar-menu').get(0)
		$(parent).find('.open').find('.collapse').collapse('hide');
		$(this).closest('li').addClass('open');
	});
	$('.sidebar .collapse').on('hidden.bs.collapse', function(e) {
		e.stopPropagation()
		$(this).closest('li').removeClass('open');
	});

	// ENABLE TOOLTIPS
	if($('[data-toggle="tooltip"]').length > 0)
		$('[data-toggle="tooltip"]').tooltip()

	$('[data-toggle="tab"]').on('hide.bs.tab', function(e) {
		$(e.target).removeClass('active')
	})

	// PRELOADER
	window.addEventListener('load', function() {
		$('.preloader').fadeOut()
		domFactory.handler.upgradeAll()
	})
})();

var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
	$SIDEBAR_MENU = $('.sidebar-menu'),
	$SIDEBAR_MINI_MENU = $('.sidebar.sidebar-mini'),
	$NAVIGATION_MENU = $('.nav.navbar-nav');

function sidebarMiniMenu() {
	var groupMenuIsActive = $SIDEBAR_MENU.find('a').filter(function () {
		return this.href == CURRENT_URL;
	}).parents('div.tab-pane').attr('id');

	$SIDEBAR_MINI_MENU.find('a').filter(function () {
		return this.href == CURRENT_URL+'#'+groupMenuIsActive;
	}).parent('li').addClass('active');

	$('.sidebar.sidebar-mini a.sidebar-menu-button').on( "click", function() {
		$('.sidebar.sidebar-mini a.sidebar-menu-button').removeClass('show');
		$(this).addClass('show');
	});
}

//count total json (obj)
function countProperties(obj) {
	var prop;
	var propCount = 0;

	for (prop in obj) {
		propCount++;
	}
	return propCount;
}

// submit modal function
function submitModal() {
	$('#defaultModal form').submit(function(event) {
		var url		 = $(this).attr('action');
		var options = {
			type: 'POST',
			data: $(this).serialize(),
			dataType: 'json',
			success: function(response, textStatus, jqXHR) {
				if(countProperties(response) > 0) {
					$('form[action="'+url+'"] .form-group').removeClass('has-error');
					$('form[action="'+url+'"] .form-group .help-block').html('');
					for(i in response) {
						$('form[action="'+url+'"] .field-' + i ).addClass('has-error');
						$('form[action="'+url+'"] .field-' + i + ' .help-block').html(response[i][0]);
					}
				}
			},
			complete: function(jqXHR, textStatus) {
				var redirect = jqXHR.getResponseHeader('X-Redirect');
				if(redirect != null)
					location.href = redirect;
			}
		}
		$.ajax(url, options);
		event.preventDefault();
	});
}

$(document).ready(function () {
	$SIDEBAR_MENU.find('a').filter(function () {
		return this.href == CURRENT_URL;
	}).parent('li').addClass('active').parents('ul').addClass('show').parent().addClass('active open');
	$('div.simplebar-content').removeClass('active open');

	if($SIDEBAR_MINI_MENU.length > 0)
		sidebarMiniMenu();

	$NAVIGATION_MENU.find('a').filter(function () {
		return this.href == CURRENT_URL;
	}).addClass('active').parents('div').parent().addClass('active');
	
	$('.grid-view').parents('.card-body').addClass('gridview');

	/* dialog load */
	$(document).on('click', '.modal-btn:not("[data-target]")', function (event) {
		var link = $(this).attr('href');
		$('#defaultModal .modal-body').load(link, function () {
			$('#defaultModal').modal({
				show: true,
			});
			submitModal();
		});
		event.preventDefault();
	});
});