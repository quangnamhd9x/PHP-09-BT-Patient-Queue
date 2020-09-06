<?php

include_once "Patient.php";

class Queue
{
    private $listData;

    public function __construct()
    {
        $this->listData = array();
    }

    function addPatient($name, $code)
    {
        $patient = new Patient($name, $code);
        array_push($this->listData, $patient);
    }

    function sort()
    {
        function my_sort($a, $b)
        {
            if ($a->code == $b->code) return 1;
            return ($a->code > $b->code) ? 1 : -1;
        }

        usort($this->listData, "my_sort");

    }

    function dequeue()
    {
        $current = array();

        $result = array_shift($this->listData);

        array_push($current, $result);

        return $current;
    }


    function toString()
    {
        return $this->listData;
    }


}