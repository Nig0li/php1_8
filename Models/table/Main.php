<?php

namespace Site\Models\table;

use Site\Models\Ancestor;

class Main extends Ancestor
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