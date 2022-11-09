<?php
class Date {
    private $day;
    private $month;
    private $year;

    public function __construct($day, $month, $year){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
}
    public function setDay($day){
       $this->day = date("d");
    }
    public function getDay(){
       return $this->day;
    }
    public function setMonth($month){
        $this->month = date("m");
    }
    public function getMonth(){
        return $this->month;
    }
    public function setYear($year){
        $this->year = date("Y");
    }
    public function getYear(){
        return $this->year;
    }
    public function createDate($day, $month, $year){
        return $this->day. $this->month. $this->year;
    }




}