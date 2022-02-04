<?php

namespace LDK\DashboardAbstract\Views\Components;

use Illuminate\Support\Arr;
use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
    public $class;

    public function __construct()
    {
        //
    }

    abstract public function render();

    public function class(array $classes = [])
    {
        $this->class = Arr::toCssClasses($classes);

        return $this;
    }
}
