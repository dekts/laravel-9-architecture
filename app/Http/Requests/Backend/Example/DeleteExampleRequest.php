<?php

namespace App\Http\Requests\Backend\Example;

use App\Http\Requests\Core\DeleteFormRequest;

class DeleteExampleRequest extends DeleteFormRequest
{
    protected $table = 'examples';
}
