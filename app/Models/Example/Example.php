<?php

namespace App\Models\Example;

use App\Traits\Core\Filterable;
use App\Models\ExampleType\ExampleType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Example extends Model
{
    use HasFactory, Filterable;

    /**
     * @var string
     */
    protected $table = 'examples';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'example_type_id',
        'is_active',
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    |
    | These are the relationships defined for this model
    |
    */

    /**
     * @return BelongsTo
     */
    public function example_type(): BelongsTo
    {
        return $this->belongsTo(ExampleType::class);
    }

}
