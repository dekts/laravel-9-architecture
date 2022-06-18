<?php

namespace App\Repositories\Example;

use App\Interfaces\Core\SearchInterface;
use App\Repositories\Core\Repository;
use App\Exceptions\Example\ExampleSearchException;
use App\Interfaces\Example\ExampleInterface;
use App\Models\Example\Example;
use Exception;
use Illuminate\Support\Arr;

class ExampleRepository extends Repository implements ExampleInterface, SearchInterface
{
    /**
     * @var string
     */
    public $model = Example::class;

    /**
     * @param array $request
     * @return mixed
     * @throws ExampleSearchException
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
            throw new ExampleSearchException($exception);
        }
    }
}
