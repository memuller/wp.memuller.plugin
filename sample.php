<?php
	/*
	Plugin Name: Bricks Sample Plugin
	Version: 2015.05a
	Plugin URI: http://github.com/memuller/bricks-sample
	Description: Sample and skeleton file for the Bricks Wordpress plugin framework.
	Author: Matheus Muller
	Author URI: http://memuller.com
	*/

	/*
	Copyright (c) 2015, Matheus Muller

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
	*/

	/* Specify the plugin namespace here, otherwise we'll use the plugin's folder. */
	$namespace = 'Sample';

	/* Features dependant on external libraries.
	 * haml : haml parser for templates
	 * ganon : the ganon library, with file_get_dom() function
	 * recaptcha : recaptcha lib
	 * list-table : WP_List_Table for building nice tabular lists on the admin side
	*/
	$features = array('ganon');

	require 'lib/loader.php';

?>
