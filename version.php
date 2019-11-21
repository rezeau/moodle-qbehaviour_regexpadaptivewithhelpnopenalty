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
 * Version information for the calculated question type.
 *
 * @package    qbehaviour_regexpadaptivewithhelpnopenalty
 * @copyright  2011-2012 Joseph R�zeau
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'qbehaviour_regexpadaptivewithhelpnopenalty';
$plugin->version  = 2019112100;
$plugin->requires = 2016052300; // Moodle version.
$plugin->dependencies = array(
    'qbehaviour_regexpadaptivewithhelp' => 2019112100
);
$plugin->release = '3.8.0 for Moodle 3.1-3.8';
$plugin->maturity  = MATURITY_STABLE;
