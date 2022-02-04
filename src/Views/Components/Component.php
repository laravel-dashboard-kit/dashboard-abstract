<?php

namespace LDK\DashboardAbstract\Views\Components;

use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
    public $defaultAttributes;

    abstract public function render();

    public function __construct()
    {
        $this->defaultAttributes = $this->defaultAttributes ?: $this->newAttributeBag();
    }
}
