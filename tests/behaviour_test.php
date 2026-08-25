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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Tests for the no-penalty RegExp adaptive behaviour.
 *
 * @package    qbehaviour_regexpadaptivewithhelpnopenalty
 * @copyright  2026 RegExp plugin maintainers
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qbehaviour_regexpadaptivewithhelpnopenalty;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/question/behaviour/regexpadaptivewithhelpnopenalty/behaviour.php');

/**
 * Tests for the no-penalty RegExp adaptive behaviour.
 */
final class behaviour_test extends \advanced_testcase {
    /**
     * Help and previous tries must never reduce a grade in this behaviour.
     */
    public function test_help_does_not_apply_a_penalty(): void {
        $reflection = new \ReflectionClass(\qbehaviour_regexpadaptivewithhelpnopenalty::class);
        $behaviour = $reflection->newInstanceWithoutConstructor();
        $method = $reflection->getMethod('adjusted_fraction');

        $this->assertSame(0.75, $method->invoke($behaviour, 0.75, 3, 1));
        $this->assertSame('', $behaviour->get_help_penalty(0.25, 2, 'helppenalty'));
    }
}
