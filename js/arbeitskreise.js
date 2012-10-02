/*
 * SimpleModal Basic Modal Dialog
 * http://www.ericmmartin.com/projects/simplemodal/
 * http://code.google.com/p/simplemodal/
 *
 * Copyright (c) 2010 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Revision: $Id: basic.js 254 2010-07-23 05:14:44Z emartin24 $
 */

jQuery(function ($) {
	// Load dialog on page load
	//$('#basic-modal-content').modal();

	// Load dialog on click
	$('#ak_chor .basic').click(function (e) {
		$('#arbeitskreis_chor-content').modal({position: [250,null]});

		return false;
	});

	$('#ak_computer .basic').click(function (e) {
		$('#arbeitskreis_computer-content').modal({position: [250,null]});

		return false;
	});

	$('#ak_gartengruppe .basic').click(function (e) {
		$('#arbeitskreis_gartengruppe-content').modal({position: [250,null]});

		return false;
	});

	$('#ak_kochen .basic').click(function (e) {
		$('#arbeitskreis_kochen-content').modal({position: [250,null]});

		return false;
	});

	$('#ak_orff .basic').click(function (e) {
		$('#arbeitskreis_orff-content').modal({position: [250,null]});

		return false;
	});

	$('#ak_schulspiel .basic').click(function (e) {
		$('#arbeitskreis_schulspiel-content').modal({position: [250,null]});

		return false;
	});

	$('#ak_sport .basic').click(function (e) {
		$('#arbeitskreis_sport-content').modal({position: [250,null]});

		return false;
	});

	$('#ak_streitschlichter .basic').click(function (e) {
		$('#arbeitskreis_streitschlichter-content').modal({position: [250,null]});

		return false;
	});

});