function initializeNavPanel() {
	const $nav = $('#nav');
	const $wrapper = $('#wrapper');
	const $body = $('body');
	const $header = $('#header');

	// Toggle
	const $navPanelToggle = $('<a href="#navPanel" id="navPanelToggle">Menu</a>').appendTo($wrapper);

	$header.scrollex({
		bottom: '5vh',
		enter: function () {
			$navPanelToggle.removeClass('alt');
		},
		leave: function () {
			$navPanelToggle.addClass('alt');
		}
	});

	// Panel
	const $navPanel = $(
		'<div id="navPanel">' +
			'<nav></nav>' +
			'<a href="#navPanel" class="close"></a>' +
		'</div>'
	).appendTo($body)
	.panel({
		delay: 500,
		hideOnClick: true,
		hideOnSwipe: true,
		resetScroll: true,
		resetForms: true,
		side: 'right',
		target: $body,
		visibleClass: 'is-navPanel-visible'
	});

	const $navPanelInner = $navPanel.children('nav');
	const $navContent = $nav.children();

	breakpoints.on('>medium', function () {
		$navContent.appendTo($nav);
		$nav.find('.icons, .icon').removeClass('alt');
	});

	breakpoints.on('<=medium', function () {
		$navContent.appendTo($navPanelInner);
		$navPanelInner.find('.icons, .icon').addClass('alt');
	});

	// WordPress transition fix
	if (browser.os == 'wp' && browser.osVersion < 10)
		$navPanel.css('transition', 'none');
}

$(document).on('click', '#nav .submenu > a, #navPanel .submenu > a', function (e) {
    if (breakpoints.active('<=medium')) {
        e.preventDefault();

        const $li = $(this).parent('li');
        $li.toggleClass('open');

        $(this).attr(
            'aria-expanded',
            $li.hasClass('open')
        );
    }
});