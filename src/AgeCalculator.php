<?php

namespace App\Mydigitalschool;

class AgeCalculator
{
    public function calculateAge($birthDate)
    {
        $currentDate = new \DateTime();
        $birthDate = new \DateTime($birthDate);

        $age = $currentDate->diff($birthDate)->y;

        return $age;
    }
}
