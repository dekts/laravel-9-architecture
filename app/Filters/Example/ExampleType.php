<?php

namespace App\Filters\Example;

use App\Filters\Core\QueryFilter;
use App\Interfaces\Core\FilterInterface;

class ExampleType extends QueryFilter implements FilterInterface
{
    /**
     * @param $value
     * @return mixed|void
     */
    public function handle($value)
    {
        $this->query->whereHas('example_type', function ($q) use ($value) {
            return $q->where('name', $value);
        });
    }
}
