<?php

namespace LDK\DashboardAbstract\Http\Livewire;

use Akhaled\LivewireSweetalert\Fire;
use Akhaled\LivewireSweetalert\Toast;
use Akhaled\LivewireSweetalert\Confirm;
use Livewire\Component as BaseComponent;
use LDK\DashboardAbstract\Concerns\WithAdminUI;

class Component extends BaseComponent
{
    use WithAdminUI, Confirm, Toast, Fire;
}
