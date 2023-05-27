<?php

namespace Crimsoncircle\Model;

class LeapYear
{
    public function isLeapYear($year)
    {
        //TODO: Logic must be implemented to calculate if a year is a leap year
       
        if (date('L', strtotime("$year-01-01"))) 
        {
            return TRUE;
       } 
       else 
       {
        return FALSE;
       }
   
        
    }
}