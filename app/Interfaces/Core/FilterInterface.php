<?php

namespace App\Interfaces\Core;

interface FilterInterface
{
    /**
     * @param $value
     * @return mixed
     */
    public function handle($value);
}
