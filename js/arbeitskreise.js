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
	$('#ag_chor .basic').click(function (e) {
		$('#ag_chor-content').modal({position: ["5%",null]});

		return false;
	});

	$('#ag_computer-klasse2 .basic').click(function (e) {
		$('#ag_computer-klasse2-content').modal({position: ["5%",null]});

		return false;
	});

	$('#ag_schulgarten .basic').click(function (e) {
		$('#ag_schulgarten-content').modal({position: ["5%",null]});

		return false;
	});

	$('#ag_computer-klasse3_4 .basic').click(function (e) {
		$('#ag_computer-klasse3_4-content').modal({position: ["5%",null]});

		return false;
	});

	$('#ag_orff .basic').click(function (e) {
		$('#ag_orff-content').modal({position: ["5%",null]});

		return false;
	});

	$('#ag_streitschlichter .basic').click(function (e) {
		$('#ag_streitschlichter-content').modal({position: ["5%",null]});

		return false;
	});

	$('#koop_blaeserklassen .basic').click(function (e) {
		$('#koop_blaeserklassen-content').modal({position: ["5%",null]});

		return false;
	});

	$('#koop_handball .basic').click(function (e) {
		$('#koop_handball-content').modal({position: ["5%",null]});

		return false;
	});

});