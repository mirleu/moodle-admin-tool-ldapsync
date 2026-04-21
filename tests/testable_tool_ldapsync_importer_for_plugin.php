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
 * Testable object for the importer (moved from plugin_test.php)
 *
 * @package    tool_ldapsync
 * @copyright  Copyright (c) 2019, UCSF Center for Knowledge Management
 * @author     2019 Carson Tam {@email carson.tam@ucsf.edu}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class Testable_tool_ldapsync_importer_for_plugin extends \tool_ldapsync\importer {
    /**
     * Change the visibility scope of the protected function to public
     */
    public function connecttoldap() {
        return parent::connecttoldap();
    }

    /**
     * Searches LDAP for user records that were updated/created after a given datetime.
     * @param \LDAP\Connection $ldap the LDAP connection
     * @param string|null $ldaptimestamp the datetime
     * @return array nested array of user records
     * @throws Exception if search fails
     */
    public function getupdatesfromldap($ldap, $ldaptimestamp = null) {
        return parent::getupdatesfromldap($ldap, $ldaptimestamp);
    }
}
