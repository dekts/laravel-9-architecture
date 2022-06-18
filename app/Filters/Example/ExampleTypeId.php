<?php

namespace App\Filters\Example;

use App\Filters\Core\QueryFilter;
use App\Interfaces\Core\FilterInterface;

class ExampleTypeId extends QueryFilter implements FilterInterface
{
    /**
     * @param $value
     * @return mixed|void
     */
    public function handle($value)
    {
        $this->query->where('example_type_id', '=', $value);
    }
}
