<?php

namespace App\Http\Requests\ExampleType;

use App\Http\Requests\Core\DeleteFormRequest;

class DeleteExampleTypeRequest extends DeleteFormRequest
{
    protected $table = 'example_types';
}
