<?php

namespace App\Http\Requests\Backend\Example;

use App\Http\Requests\Core\CreateFormRequest;
use Illuminate\Validation\Rule;

class CreateExampleRequest extends CreateFormRequest
{
    protected $table = 'examples';

    /**
     * @inheritDoc
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                Rule::unique($this->table, 'name')
            ],
            'example_type_id' => [
                'required',
                Rule::exists('example_types', 'id')
            ],
            'is_active' => [
                'sometimes',
                'boolean'
            ],
        ];
    }
}
