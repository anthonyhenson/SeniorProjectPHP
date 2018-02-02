<?php
/**
 * Created by PhpStorm.
 * User: AD
 * Date: 2/2/2018
 * Time: 12:49 AM
 */

# Seniors cannot overlap all sections  -unless there are many sections
# Juniors cannot overlap all sections  -unless there are many sections
# Juniors / seniors prefer to not overlap
# EGR401/EGR402 can not overlap
# 200 level cannot overlap
# Do not overlap EGR226 with 300 level courses

# 100/200 level courses can overlap with 400 level
# 100 can overlap with 300 level
# 100 level can overlap with itself

# Freshman / sophomore can conflict with chapel
# Juniors / seniors can overlap with chapel

# Faculty meeting timeslot with no course overlap (be able to block any timeslots) -- OPTIONAL.

class LinearProgramming
{
    public $sProfessorName;
    public $sAvailableDayNames;
    public $dtAvailableDayTimes;
    public $scSectionsTaught;

    function assignSectionToRoom() {

    }

	function happinessRoomVal() {

    }

	function isProfessorTimesAvailable() {

    }

	function isRoomTimesAvailable() {

    }

	function insertDayTimes() {

    }

	function clearAllTimeSlots() {

    }

	function assignTimeSlots() {

    }
}