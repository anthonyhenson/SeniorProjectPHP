<?php
/**
 * Created by PhpStorm.
 * User: AD
 * Date: 1/23/2018
 * Time: 12:09 AM
 */

class TimeLength {
    public $sCoursePlaceHolder;
    public $iStartTimeHour;
    public $iStartTimeMinute;
    public $iEndTimeHour;
    public $iEndTimeMinute;

    public $bIsTimeFilled;

    function TimeLength($sFill, $iSh, $iSm, $iEh, $iEm) {
        $this->sCoursePlaceHolder = $sFill;
        $this->iStartTimeHour = $iSh;
        $this->iStartTimeMinute = $iSm;
        $this->iEndTimeHour = $iEh;
        $this->iEndTimeMinute = $iEm;
        $this->bIsTimeFilled = false;
    }

    function setTrue ($iX){
        if ($iX = 1)
            $this->bIsTimeFilled = true;
        else
            $this->bIsTimeFilled = false;
    }

    function getCoursePlaceHolder(){ return $this->sCoursePlaceHolder;}
    function setCoursePlaceHolder($sCourse){$this->sCoursePlaceHolder = $sCourse;}
    function getStartTimeHour(){return $this->getStartTimeHour;}
    function getStartTimeMinute(){return $this->getStartTimeMinute;}
    function isTimeFilled(){return $this->bIsTimeFilled;}
    function setTimeFilled($bTimeFilled){$this->bIsTimeFilled = $bTimeFilled;}
    function toString(){echo('Turn this into formatted output: TimeLength.php');}
}