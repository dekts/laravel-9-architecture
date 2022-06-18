<?php

namespace App\Interfaces\Core;

interface SearchInterface
{
    /**
     * @param array $request
     * @return mixed
     */
    public function search(array $request);
}
