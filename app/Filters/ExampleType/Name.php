<?php

namespace App\Filters\ExampleType;

use App\Filters\Core\QueryFilter;
use App\Interfaces\Core\FilterInterface;

class Name extends QueryFilter implements FilterInterface
{
    /**
     * @param $value
     * @return mixed|void
     */
    public function handle($value)
    {
        $this->query->where('name', 'like', '%' . $value . '%');
    }
}
