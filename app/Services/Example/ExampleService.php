<?php

namespace App\Services\Example;

use App\Exceptions\Example\ExampleDestroyException;
use App\Exceptions\Example\ExampleIndexException;
use App\Exceptions\Example\ExampleNotFoundException;
use App\Exceptions\Example\ExampleSearchException;
use App\Exceptions\Example\ExampleStoreException;
use App\Exceptions\Example\ExampleUpdateException;
use App\Repositories\Example\ExampleRepository;
use Exception;

class ExampleService
{
    /**
     * @var ExampleRepository
     */
    public $exampleRepository;

    /**
     * @param ExampleRepository $exampleRepository
     */
    public function __construct(ExampleRepository $exampleRepository)
    {
        $this->exampleRepository = $exampleRepository;
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ExampleNotFoundException
     */
    public function getById(int $id)
    {
        try {
            return $this->exampleRepository->findById($id);
        } catch (Exception $exception) {
            throw new ExampleNotFoundException($exception);
        }
    }

    /**
     * @return mixed
     * @throws ExampleIndexException
     */
    public function getAll()
    {
        try {
            return $this->exampleRepository->findAll();
        } catch (Exception $exception) {
            throw new ExampleIndexException($exception);
        }
    }

    /**
     * @param array $data
     * @return mixed
     * @throws ExampleStoreException
     */
    public function create(array $data)
    {
        try {
            return $this->exampleRepository->create($data);
        } catch (Exception $exception) {
            throw new ExampleStoreException($exception);
        }
    }

    /**
     * @param array $data
     * @return mixed
     * @throws ExampleUpdateException
     */
    public function update(array $data)
    {
        try {
            return $this->exampleRepository->update($data['id'], $data);
        } catch (Exception $exception) {
            throw new ExampleUpdateException($exception);
        }
    }

    /**
     * @param int $id
     * @return mixed|void
     * @throws ExampleDestroyException
     */
    public function delete(int $id)
    {
        try {
            return $this->exampleRepository->delete($id);
        } catch (Exception $exception) {
            throw new ExampleDestroyException($exception);
        }
    }

    /**
     * @param array $data
     * @return mixed|void
     * @throws ExampleSearchException
     */
    public function search(array $data)
    {
        try {
            return $this->exampleRepository->search($data);
        } catch (Exception $exception) {
            throw new ExampleSearchException($exception);
        }
    }
}
