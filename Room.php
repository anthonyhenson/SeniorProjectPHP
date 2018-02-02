<?php
/**
 * Created by PhpStorm.
 * User: AD
 * Date: 1/31/2018
 * Time: 1:39 AM
 */

class Room
{
    public $sRoomNum;
    public $sBuilding;
    public $dSeatingCapacity;
    public $sRoomType;
    public $dtDayList;

    function Room ($sRoomNum, $sBuildingNum, $dSeatingCapacity, $sRoomType){
        $this->sRoomNum = $sRoomNum;
        $this->sBuilding = $sBuildingNum;
        $this->dSeatingCapacity = $dSeatingCapacity;
        $this->sRoomType = $sRoomType;

        $this->dtDayList = new TimeLength();
        $this->dtDayList[] = new DayTimes("Monday");
        $this->dtDayList[] = new DayTimes("Tuesday");
        $this->dtDayList[] = new DayTimes("Wednesday");
        $this->dtDayList[] = new DayTimes("Thursday");
        $this->dtDayList[] = new DayTimes("Friday");
    }

    function addDayTimes($dtDayTimesToAdd){
        foreach ($this->dtDayList as $dtD){
            foreach ($dtD->getDayTimes() as $tlT){
                foreach ($dtDayTimesToAdd as $dtDayToAdd){
                    foreach ($dtDayToAdd->getDayTimes() as $tlTimeAdd){
                        if ($dtD->getDay() == $dtDayToAdd->getDay() and $tlT->GetStartTimeMinute() == $tlTimeAdd->getStartTimeMinute() and $tlTimeAdd->isTimeFilled()){
                            $tlT->setTimeFilled(true);
                            $tlT->setCoursePlaceHolder($tlTimeAdd->getCoursePlaceHolder());
                        }
                    }
                }
            }
        }
    }

    function getSeatingCapacity() {return $this->dSeatingCapacity;}

    function getRoomType() {return $this->sRoomType;}

    function getDayList() {return $this->dtDayList;}

    function toString() {echo('Turn this into formatted output: Room.php');}
}