<?php
/**
 * Created by PhpStorm.
 * User: AD
 * Date: 2/2/2018
 * Time: 12:44 AM
 */

class Section
{
    public $cSeciton;
    public $sSectionID;
    public $pcProfessorAssigned;
    public $rcRoomAssigned;
    public $dtDayTimeAssigned;

    function Section ($cID, $sSec, $pcP){
        $this->cSection = $cID;
        $this->sSectionID = $sSec;
        $this->pcProfessorAssigned = $pcP;

        $this->dtDayTimeAssigned = new DayTimes();

        $this->dtDayTimeAssigned[] = new DayTimes("Monday");
        $this->dtDayTimeAssigned[] = new DayTimes("Tuesday");
        $this->dtDayTimeAssigned[] = new DayTimes("Wednesday");
        $this->dtDayTimeAssigned[] = new DayTimes("Thursday");
        $this->dtDayTimeAssigned[] = new DayTimes("Friday");
    }

    function getProfessorAssigned() {return $this->pcProfessorAssigned;}

    function getSectionID() {return $this->sSectionID;}

    function getDayTimeAssigned() {return $this->dtDayTimeAssigned;}

    function setRoomAssigned($rcRoomAssigned) {$this->rcRoomAssigned = $rcRoomAssigned;}

    function setDayTimeAssigned($dtDayTimeAssigned) {$this->dtDayTimeAssigned = $dtDayTimeAssigned;}

    function toString() {echo('Turn this into formatted output: Section.php');}
}