<?php
/**
 * Created by PhpStorm.
 * User: AD
 * Date: 2/2/2018
 * Time: 12:29 AM
 */

class Course
{
    public $sCourseCode;
    public $dCourseSize;
    public $iCredits;
    public $sCourseType;
    public $scCourseSections;

    function Course ($sID, $iCredits, $sType, $dSize, $scSections){
        $this->sCourseCode = $sID;
        $this->sCourseSize = $dSize;
        $this->iCredits = $iCredits;
        $this->sCourseType = $sType;

        $this->scCourseSections = $scSections;
    }

    function getCourseSize() {return $this->dCourseSize;}

    function getCredits() {return $this->iCredits;}

    function getCourseType() {return $this->sCourseType;}

    function getCourseSections() {return $this->scCourseSections;}

    function toString() {echo('Turn this into formatted output: Course.php');}
}