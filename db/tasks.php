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
*
*
* @package    local
* @subpackage sync
* @copyright  2016 Hans Jeria <hansjeria@gmail.com>
* @copyright  2016 Mark Michaelsen <mmichaelsen678@gmail.com>
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

$tasks = array(
	array(
			'classname' => 'local_sync\task\sync_coursesandusers_from_omega',
			'blocking' => 0,
			'minute' => '*',
			'hour' => '2-5',
			'day' => '*',
			'dayofweek' => '*',
			'month' => '*'
	)
);
