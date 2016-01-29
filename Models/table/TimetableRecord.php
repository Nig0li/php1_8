<?php

namespace Site\Models\table;

use Site\Models\Ancestor;

class TimetableRecord extends Ancestor
{
    const TABLE = 'trains';

    protected $dat;
    protected $numb;
    protected $timeDep;
    protected $timeArr;
    protected $timeTravel;

    public function getDate()
    {
        return $this->dat;
    }

    public function getNumber()
    {
        return $this->numb;
    }

    public function getDep()
    {
        return $this->timeDep;
    }

    public function getArr()
    {
        return $this->timeArr;
    }

    public function getTravel()
    {
        return $this->timeTravel;
    }

}