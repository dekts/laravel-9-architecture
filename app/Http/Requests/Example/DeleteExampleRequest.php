<?php

namespace App\Http\Requests\Example;

use App\Http\Requests\Core\DeleteFormRequest;

class DeleteExampleRequest extends DeleteFormRequest
{
    protected $table = 'examples';
}
