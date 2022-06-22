<?php

namespace App\Http\Requests\Backend\ExampleType;

use App\Http\Requests\Core\SearchFormRequest;
use Illuminate\Validation\Rule;

class SearchExampleTypeRequest extends SearchFormRequest
{
    protected $table = 'example_types';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes'],
            'list' => ['sometimes', 'boolean'],
            'created_at' => ['sometimes'],
            'updated_at' => ['sometimes'],
            'order_by' => [
                'sometimes',
                Rule::in([
                    'id',
                    'name',
                    'created_at',
                    'updated_at',
                ])
            ],
            'sort' => [
                'sometimes',
                Rule::in([
                    'asc',
                    'desc'
                ])
            ],
            'per_page' => [
                'sometimes',
                'integer'
            ],
        ];
    }
}
