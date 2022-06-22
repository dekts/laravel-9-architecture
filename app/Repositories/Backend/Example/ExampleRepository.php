<?php

namespace App\Repositories\Backend\Example;

use App\Interfaces\Core\SearchInterface;
use App\Repositories\Core\Repository;
use App\Exceptions\Backend\Example\ExampleSearchException;
use App\Exceptions\Backend\ExampleType\ExampleTypeIndexException;
use App\Exceptions\Backend\ExampleType\ExampleTypeNotFoundException;
use App\Interfaces\Backend\Example\ExampleInterface;
use App\Models\Example\Example;
use Exception;
use Illuminate\Support\Arr;

class ExampleRepository extends Repository implements ExampleInterface, SearchInterface
{
    /**
     * @param int $id
     * @return mixed
     * @throws ExampleTypeNotFoundException
     */
    public function getById(int $id)
    {
        try {
            return $this->exampleTypeRepository->findById($id);
        } catch (Exception $exception) {
            throw new ExampleTypeNotFoundException($exception);
        }
    }

    /**
     * @return mixed
     * @throws ExampleTypeIndexException
     */
    public function getAll()
    {
        try {
            return $this->exampleTypeRepository->findAll();
        } catch (Exception $exception) {
            throw new ExampleTypeIndexException($exception);
        }
    }

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
