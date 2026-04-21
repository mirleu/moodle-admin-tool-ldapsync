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
 * Testable object for the importer (moved from importer_test.php)
 *
 * @package    tool_ldapsync
 * @copyright  Copyright (c) 2024, UCSF Center for Knowledge Management
 * @author     2024 Carson Tam {@email carson.tam@ucsf.edu}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class Testable_tool_ldapsync_importer extends \tool_ldapsync\importer {
    /**
     * Override function visibility for testing
     * @param array $data
     * @return void
     */
    public function updatemoodleaccounts(array $data) {
        // Change visibility to allow tests to call protected function.
        return parent::updatemoodleaccounts($data);
    }
}
