<?php

namespace App\Http\Requests\Backend\Example;

use App\Http\Requests\Core\ShowFormRequest;

class ShowExampleRequest extends ShowFormRequest
{
    protected $table = 'examples';
}
