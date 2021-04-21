<?php

namespace App\Interfaces;

interface Validatable
{
    /**
     * Returns array or Collection of validation rules.
     *
     * @return array
     */
    public static function validationRules(): array;
}
