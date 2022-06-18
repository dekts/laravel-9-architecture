<?php

namespace App\Exceptions\Core;

class GeneralNotFoundException extends GeneralException
{
    public $code = 404;

    /**
     * @return string|null
     */
    public function message(): ?string
    {
        return "The requested resource was not found in the database";
    }
}
