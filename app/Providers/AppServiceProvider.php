<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Region;
use App\Comuna;
use App\ServicioSalud;
use App\Establecimiento;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        setlocale(LC_TIME, 'es_ES.utf8');
        Carbon::setLocale('es');

        Relation::morphMap([
            'region' => Region::class,
            'comuna' => Comuna::class,
            'servicio' => ServicioSalud::class,
            'establecimiento' => Establecimiento::class,
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }
    }
}
