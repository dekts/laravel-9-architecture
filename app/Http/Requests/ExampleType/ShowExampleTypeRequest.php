<?php

namespace App\Http\Requests\ExampleType;

use App\Http\Requests\Core\ShowFormRequest;

class ShowExampleTypeRequest extends ShowFormRequest
{
    protected $table = 'example_types';
}
