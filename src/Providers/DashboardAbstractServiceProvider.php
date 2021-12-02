<?php

namespace LDK\DashboardAbstract\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use LDK\DashboardAbstract\Services\NotifyService;

class DashboardAbstractServiceProvider extends ServiceProvider
{
    public function register()
    {
        config(['blade-icons.attributes' => [
            'width' => 24,
            'height' => 24,
        ]]);

        $this->mergeConfigFrom(__DIR__ . '/../../config/livewire-datatables.php', 'livewire-datatables');
        $this->mergeConfigFrom(__DIR__.'/../../config/blade-javascript.php', 'blade-javascript');
        $this->registerServices();
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'dashboard-abstract');
        $this->loadTranslationsFrom(__DIR__ .'/../../resources/lang', 'dashboard');

        Blade::directive('attributes', function ($attributes) {
            return "<?php echo implode(' ', array_map("
                . "function (\$v, \$k) { return sprintf(\"%s='%s'\", \$k, \$v); },"
                . "$attributes,"
                . "array_keys($attributes)"
            . ")); ?>";
        });
    }

    protected function registerServices()
    {
        $this->app->bind('LDKNotify', function () {
            return new NotifyService;
        });
    }
}
