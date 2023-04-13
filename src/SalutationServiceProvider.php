<?php

namespace NomUtilisateur\Salutation;

use Illuminate\Support\ServiceProvider;

class SalutationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Code pour la publication des fichiers de configuration et autres ressources
    }

    public function register()
    {
        $this->app->singleton('salutation', function () {
            return new Salutation();
        });
    }
}