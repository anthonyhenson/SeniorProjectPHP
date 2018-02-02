<?php
/**
 * Created by PhpStorm.
 * User: AD
 * Date: 1/31/2018
 * Time: 12:34 AM
 */
include ("TimeLength.php");
class DayTimes
{
    public $sDay;
    public $tlDayTimes;
    public $gr;

    function DayTimes($sD) {
        $this->sDay = $sD;
        $this->tlDayTimes = new TimeLength();

        for ($i = 8; $i < 17; $i++) {
            for ($j = 0; $j <= 45; $j+=15) {
                if (j == 45){
                    $this->tlDayTimes[] = $this->tlDayTimes->TimeLength("",i,j,i+1,0);
                }
                else {
                    $this->tlDayTimes[] = $this->tlDayTimes->TimeLength("",i,j,i,j+15);
                }
            }
        }
    }

    function fillDay($sY, $iX){
        if ($this->sDay == $sY) {
            $this->tlDayTimes[$iX]->setTrue(1);
        }
    }

    function getDay(){return $this->sDay;}
    function getDayTimes(){return $this->tlDayTimes;}
    function toString(){echo('Turn this into formatted output: DayTimes.php');}
}