<?php

namespace LDK\DashboardAbstract\Views\Components;

use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
    abstract public function render();
}
