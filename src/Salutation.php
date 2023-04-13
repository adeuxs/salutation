<?php

namespace Planme\Salutation;

use DateTime;

class Salutation
{
    public function greet()
    {
        $now = new DateTime();
        $hour = (int) $now->format('H');

        if ($hour >= 5 && $hour < 12) {
            return 'Bonjour';
        } elseif ($hour >= 12 && $hour < 18) {
            return 'Bon après-midi';
        } elseif ($hour >= 18 && $hour < 22) {
            return 'Bonsoir';
        } else {
            return 'Bonne nuit';
        }
    }
}