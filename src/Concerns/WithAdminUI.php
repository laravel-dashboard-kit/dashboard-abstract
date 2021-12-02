<?php

namespace LDK\DashboardAbstract\Concerns;

/**
 * Livewire methods
 */
trait WithAdminUI
{
    public function reloadWindow()
    {
        $this->dispatchBrowserEvent('windowReload');
    }
}
