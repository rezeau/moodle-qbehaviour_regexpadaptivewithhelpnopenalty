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
 * Renderer for outputting parts of a question belonging to the legacy
 * adaptive (no penalties) behaviour.
 *
 * @package    qbehaviour
 * @subpackage adaptivenopenalty
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

require_once(dirname(__FILE__) . '/../regexpadaptivewithhelp/renderer.php');

/**
 * Renderer for outputting parts of a question belonging to the legacy
 * adaptive (no penalties) behaviour.
 *
 * @copyright  2011 Joseph Rézeau
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qbehaviour_regexpadaptivewithhelpnopenalty_renderer extends qbehaviour_regexpadaptivewithhelp_renderer {
    protected function penalty_info($qa, $mark) {
        return '';
    }

    protected function total_penalties_info() {
        return '';
    }    

    // display the "Help" button
    public function controls(question_attempt $qa, question_display_options $options) {
        $helpmode = $qa->get_question()->usehint;
        switch ($helpmode) {
            case 1 : $helptext = get_string('getletter', 'qbehaviour_regexpadaptivewithhelpnopenalty'); break;
            case 2 : $helptext = get_string('getword', 'qbehaviour_regexpadaptivewithhelpnopenalty'); break;
        }
        return parent::controls($qa, $options, $helptext);
    }    
}
