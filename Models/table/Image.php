<?php

namespace Site\Models\table;


use Site\Models\Ancestor;

class Image extends Ancestor
{
    const TABLE = 'gallery';

    protected $id;
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}