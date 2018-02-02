<?php
/**
 * Created by PhpStorm.
 * User: AD
 * Date: 2/2/2018
 * Time: 12:31 AM
 */

class Professor
{
//    Anthony Corso
//    Larry Clement
//    Creed Jones
//    Mi Kyung Han
//    Kyungsoo Im
//    Michael Kolta
//    Arlene Louise Perkins

    public $sProfessorName;
    public $sAvailableDayNames;
    public $dtAvailableDayTimes;
    public $scSectionsTaught;

    function Professor($sN, $sDays){
        $this->sProfessorName = $sN;
        $this->sAvailableDayNames = $sDays;
		$this->scSectionsTaught = new Section();
        $this->dtAvailableDayTimes = new DayTimes();
		for ($i = 0; $i < days.length; $i++) {
			$this->dtAvailableDayTimes[] = new DayTimes(days[$i]);
		}
    }

    function addDayTimes($dtTimesToAdd){
        foreach ($this->dtAvailableDayTimes as $dtD){
            foreach ($dtD->getDayTimes() as $tlT){
                foreach ($dtTimesToAdd as $dtDayToAdd){
                    foreach ($dtDayToAdd->getDayTimes() as $tlTimeAdd){
                        if ($dtD->getDay() == $dtDayToAdd->getDay() and
                            $tlT->getStartTimeHour() == $tlTimeAdd->getStartTimeHour() and
                            $tlT->GetStartTimeMinute() == $tlTimeAdd->getStartTimeMinute() and
                            $tlTimeAdd->isTimeFilled()){
                            $tlT->setTimeFilled(true);
                            $tlT->setCoursePlaceHolder($tlTimeAdd->getCoursePlaceHolder());
                        }
                    }
                }
            }
        }
    }

    function getAvailableDayTimes() {return $this->dtAvailableDayTimes;}

    function getSectionsTaught() {return $this->scSectionsTaught;}

    function toString() {return $this->sProfessorName;}
}