<?php

namespace LDK\DashboardAbstract\Views\Components;

use ReflectionClass;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\View;
use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
    public $class;
    public $defaultAttributes = [];

    public function __construct()
    {
        //
    }

    public function class(array $classes = [])
    {
        $this->class = Arr::toCssClasses($classes);

        $this->defaultAttributes['class'] = $this->class;

        return $this;
    }

    public function render()
    {
        $componentName = strtolower((new ReflectionClass(get_called_class()))->getShortName());

        if (View::exists("dashboard-ui::component.${componentName}")) {
            return view("dashboard-ui::components.${componentName}");
        }

        return view("dashboard-abstract::components.${componentName}");
    }
}
