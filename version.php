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
 * Plugin version and other meta-data are defined here.
 *
 * @package     local_rsync
 * @copyright   2022, Joel Robles <joelgabriel.roblesgasser@students.bfh.ch>
 *              Vithursan Thayananthan <vithursan.thayananthan@students.bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_rsync'; // Plugin name.
$plugin->release = 'v5.0-r1'; // Plugin version.
$plugin->version = 2025042500; // Version number YYYYMMDDXX where XX is an incremental number.
$plugin->requires = 2022112800; // Min moodle version, 4.1.
$plugin->maturity = MATURITY_BETA; // MATURITY_ALPHA, MATURITY_BETA, MATURITY_RC or MATURITY_STABLE.
