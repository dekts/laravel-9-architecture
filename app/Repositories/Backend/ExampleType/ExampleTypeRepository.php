<?php

namespace App\Repositories\Backend\ExampleType;

use App\Interfaces\Core\SearchInterface;
use App\Repositories\Core\Repository;
use App\Exceptions\Backend\ExampleType\ExampleTypeSearchException;
use App\Interfaces\Backend\ExampleType\ExampleTypeInterface;
use App\Models\ExampleType\ExampleType;
use Exception;
use Illuminate\Support\Arr;

class ExampleTypeRepository extends Repository implements ExampleTypeInterface, SearchInterface
{
    /**
     * @var string
     */
    public $model = ExampleType::class;

    /**
     * @param array $request
     * @return mixed
     * @throws ExampleTypeSearchException
     */
    public function search(array $request)
    {
        try {
            $query = $this->model::filterBy($request);

            $query->orderBy(Arr::get($request, 'order_by') ?? 'id', Arr::get($request, 'sort') ?? 'desc');

            if (Arr::has($request, 'list') && (bool)Arr::get($request, 'list') === true) {
                return $query->get();
            }

            return $query->paginate(Arr::get($request, 'per_page') ?? (new $this->model)->getPerPage());
        } catch (Exception $exception) {
            throw new ExampleTypeSearchException($exception);
        }
    }
}
