<?php

namespace App\Http\Requests\Example;

use App\Http\Requests\Core\UpdateFormRequest;
use Illuminate\Validation\Rule;

class UpdateExampleRequest extends UpdateFormRequest
{
    protected $table = 'examples';

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
            'example_type_id' => [
                'sometimes',
                Rule::exists('example_types', 'id')
            ],
            'is_active' => [
                'sometimes',
                'boolean'
            ]
        ];
    }
}
