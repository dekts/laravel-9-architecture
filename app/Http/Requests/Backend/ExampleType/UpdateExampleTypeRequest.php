<?php

namespace App\Http\Requests\Backend\ExampleType;

use App\Http\Requests\Core\UpdateFormRequest;
use Illuminate\Validation\Rule;

class UpdateExampleTypeRequest extends UpdateFormRequest
{
    protected $table = 'example_types';

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            'id' => [
                Rule::exists($this->table, 'id')
            ],
            'name' => [
                'sometimes',
                'string',
                Rule::unique($this->table)->ignore($this->id)
            ],
            'is_active' => [
                'sometimes',
                'boolean'
            ]
        ];
    }
}
