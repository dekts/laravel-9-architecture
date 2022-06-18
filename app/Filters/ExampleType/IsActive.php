<?php

namespace App\Filters\ExampleType;

use App\Filters\Core\QueryFilter;
use App\Interfaces\Core\FilterInterface;

class IsActive extends QueryFilter implements FilterInterface
{
    /**
     * @param $value
     * @return mixed|void
     */
    public function handle($value)
    {
        $this->query->where('is_active', '=', $value);
    }
}
