<?php

namespace Site\Models\table;

use Site\Models\Ancestor;

class MainRecord extends Ancestor
{
    const TABLE = 'main';

    protected $title;
    protected $text;

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }
}