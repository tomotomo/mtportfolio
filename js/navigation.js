/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container )
		return;

	button = container.getElementsByTagName( 'h1' )[0];
	if ( 'undefined' === typeof button )
		return;

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) )
		menu.className += ' nav-menu';

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) )
			container.className = container.className.replace( ' toggled', '' );
		else
			container.className += ' toggled';
	};
} )();

( function() {
	var header, button, menu, sns;
	header = document.getElementById( 'masthead' );
	if ( ! header )
		return;
	button = header.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button )
		return;
	menu = document.getElementById( 'main-navigation' );
	if ( ! menu )
		return;
	sns = document.getElementById( 'sns-header' );
	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}
	button.onclick = function() {
		if ( -1 !== menu.className.indexOf( 'toggled-on' ) )
			menu.className = menu.className.replace( ' toggled-on', '' );
		else
			menu.className += ' toggled-on';
		if ( sns ){
			if ( -1 !== sns.className.indexOf( 'toggled-on' ) )
				sns.className = sns.className.replace( ' toggled-on', '' );
			else
				sns.className += ' toggled-on';
		}
	};
} )();
