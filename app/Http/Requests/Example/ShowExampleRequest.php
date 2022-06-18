<?php

namespace App\Http\Requests\Example;

use App\Http\Requests\Core\ShowFormRequest;

class ShowExampleRequest extends ShowFormRequest
{
    protected $table = 'examples';
}
