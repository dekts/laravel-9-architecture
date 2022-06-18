<?php

namespace App\Exceptions\Core;

class FormRequestTableNotFoundException extends GeneralException
{
    public $code = 404;

    /**
     * @return string|null
     */
    public function message(): ?string
    {
        return "Table not found in the form request";
    }
}
