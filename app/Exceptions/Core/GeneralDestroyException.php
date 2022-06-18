<?php

namespace App\Exceptions\Core;

class GeneralDestroyException extends GeneralException
{
    public $code = 422;

    /**
     * @return string|null
     */
    public function message(): ?string
    {
        return "Error while deleting resource";
    }
}
