<?php

namespace Site\View\classes;

class View
{
    protected $data = [];

    public function assign($name, $value) {
        $this->data[$name] = $value;
    }

    public function display($template) {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        include __DIR__. '/../templates/' . $template;
    }

    public function admin($template, $res = '')
    {
        include __DIR__. '/../templates/' . $template;
        return $res;
    }
}