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
 * @package    qbehaviour
 * @subpackage regexpadaptivewithhelpnopenalty
 * @copyright  2011-2012 Joseph R�zeau
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'qbehaviour_regexpadaptivewithhelpnopenalty';
$plugin->version  = 2013101400;

$plugin->requires = 2013051400;
$plugin->dependencies = array(
    'qbehaviour_regexpadaptivewithhelp' => 2013061300
);

$plugin->release = '2.6.0 for Moodle 2.6';
$plugin->maturity  = MATURITY_STABLE;
