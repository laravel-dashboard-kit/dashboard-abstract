<?php

namespace LDK\DashboardAbstract\Concerns;

/**
 * Livewire methods
 */
trait WithDashboardUI
{
    public function reloadWindow()
    {
        $this->dispatchBrowserEvent('windowReload');
    }
}
