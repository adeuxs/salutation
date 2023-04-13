<?php

namespace NomUtilisateur\Salutation\Facades;

use Illuminate\Support\Facades\Facade;

class Salutation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'salutation';
    }
}