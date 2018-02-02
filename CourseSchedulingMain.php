<?php
/**
 * Created by PhpStorm.
 * User: AD
 * Date: 2/2/2018
 * Time: 12:52 AM
 */

/**
 * Created by PhpStorm.
 * User: AD
 * Date: 1/31/2018
 * Time: 1:39 AM
 */
//*********** POSSIBLE WAYS OF IMPROVEMENT *************** //
//1. the first sections within the course lists will get priority on taking the first time slots. Possible
//      solution is to loop through the algorithm with every possible ordering of each section in order to
//      maximize the objective funciton further.
//2. add another weighting for faculty preference to either teaching in the morning or afternoon:
//      ex: Pij = {1.5 fits preference, 1 has no preference, .5 doesnt fit preference
//      0 for not fitting preference would 0 out the sum of the section to room fit when it is possibly
//      an ok fit so .5 is more appropriate
//3. currently the main schedule can be viewed from each section: contains the room and times being taught
//      as well as the professor teaching. Possibly add section string to professors and rooms to view what
//      sections are occupying their time slots
//*********** ENGINEERING SCHEDULING REQUIREMENTS *************** //
//1. professor can choose either a MWF or TR schedule type
//2. classes are either 1 or 3 credits
//3. 3 unit classes are either MWF (1 hour) or TR (1.5 hour) based
//4. 1 unit classes can be either MTWRF (1 hour)
//5. classes can start during an 15 minute period of any hour
//      1 credit: TR ONE HOUR (4 times + 1 on each end) = 6 slots
//      1 credit: MWF ONE HOUR (4 times + 1 on each end) = 6 slots
//      3 credits: TR 1.5 HOUR (6 + 1 each end) * 2 = 16 slots
//      3 credits: MWF 1 HOUR (4 times + 1 each end) * 3 = 18 slots
//********** CONSTRAINTS ***************//
//1. no faculty assigned to more than one class (section) at a time
//2. no room holding more than one class (section) at a time
//3. course type (ex: needs projector) must be assigned to a room that fits that constraint with happiness of 1.5
//4. at least 15 minutes between faculties end of class to next assigned class
//5. at least 15 minutes between any end of one class to the start of another class in any room
//6. section size must be less than or equal to room size assigned (efficiency weighting)

class CourseSchedulingMain
{

    function main() { #check it

    }

    function outPutPCR(){

    }

    function getCourseList() {} #get from database

    function getRoomList() {} #get from database

    function getProfessorList() {} #get from database

}