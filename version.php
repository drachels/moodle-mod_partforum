<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Code fragment to define the module version etc.
 * This fragment is called by /admin/index.php
 *
 * @package mod-partforum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @copyright 2012 onwards The University of Hong Kong
 * @copyright 2016 onwards AL Rachels
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$module->version  = 2013010601;		// Participation Forum 1.4.0
$module->requires = 2012112900;  	// Requires this Moodle version
$module->cron     = 60;
$module->component = 'mod_partforum'; // Full name of the plugin (used for diagnostics)
