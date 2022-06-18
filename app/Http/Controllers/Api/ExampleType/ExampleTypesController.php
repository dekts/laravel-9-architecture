<?php

namespace App\Http\Controllers\ExampleType\Api;

use App\Http\Controllers\Api\Core\ApiController;
use App\Helpers\Core\Helper;
use App\Exceptions\ExampleType\ExampleTypeDestroyException;
use App\Exceptions\ExampleType\ExampleTypeIndexException;
use App\Exceptions\ExampleType\ExampleTypeNotFoundException;
use App\Exceptions\ExampleType\ExampleTypeStoreException;
use App\Exceptions\ExampleType\ExampleTypeUpdateException;
use App\Http\Requests\ExampleType\CreateExampleTypeRequest;
use App\Http\Requests\ExampleType\DeleteExampleTypeRequest;
use App\Http\Requests\ExampleType\SearchExampleTypeRequest;
use App\Http\Requests\ExampleType\ShowExampleTypeRequest;
use App\Http\Requests\ExampleType\UpdateExampleTypeRequest;
use App\Services\ExampleType\ExampleTypeService;
use App\Transformers\ExampleType\ExampleTypeResource;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ExampleTypesController extends ApiController
{
    /**
     * @var ExampleTypeService
     */
    private $exampleTypeService;

    /**
     * @param ExampleTypeService $exampleTypeService
     */
    public function __construct(ExampleTypeService $exampleTypeService)
    {
        $this->exampleTypeService = $exampleTypeService;
    }

    /**
     * @param SearchExampleTypeRequest $request
     * @return AnonymousResourceCollection
     * @throws ExampleTypeIndexException
     */
    public function index(SearchExampleTypeRequest $request)
    {
        try {
            return ExampleTypeResource::collection($this->exampleTypeService->search($request->validated()));
        } catch (Exception $exception) {
            throw new ExampleTypeIndexException($exception);
        }
    }

    /**
     * @param ShowExampleTypeRequest $request
     * @return JsonResponse
     * @throws ExampleTypeNotFoundException
     */
    public function show(ShowExampleTypeRequest $request)
    {
        try {
            return $this
                ->setMessage(
                    __(
                        'apiResponse.ok',
                        [
                            'resource' => Helper::getResourceName(
                                $this->exampleTypeService->exampleTypeRepository->model
                            )
                        ]
                    )
                )
                ->respond(new ExampleTypeResource($this->exampleTypeService->getById($request->id)));
        } catch (Exception $exception) {
            throw new ExampleTypeNotFoundException($exception);
        }
    }

    /**
     * @param CreateExampleTypeRequest $request
     * @return JsonResponse
     * @throws ExampleTypeStoreException
     */
    public function store(CreateExampleTypeRequest $request)
    {
        try {
            return $this
                ->setMessage(
                    __(
                        'apiResponse.storeSuccess',
                        [
                            'resource' => Helper::getResourceName(
                                $this->exampleTypeService->exampleTypeRepository->model
                            )
                        ]
                    )
                )
                ->respond(new ExampleTypeResource($this->exampleTypeService->create($request->validated())));
        } catch (Exception $exception) {
            throw new ExampleTypeStoreException($exception);
        }
    }

    /**
     * @param UpdateExampleTypeRequest $request
     * @return JsonResponse
     * @throws ExampleTypeUpdateException
     */
    public function update(UpdateExampleTypeRequest $request)
    {
        try {
            return $this
                ->setMessage(
                    __(
                        'apiResponse.updateSuccess',
                        [
                            'resource' => Helper::getResourceName(
                                $this->exampleTypeService->exampleTypeRepository->model
                            )
                        ]
                    )
                )
                ->respond(
                    new ExampleTypeResource(
                        $this->exampleTypeService
                            ->update($request->validated())
                    )
                );
        } catch (Exception $exception) {
            throw new ExampleTypeUpdateException($exception);
        }
    }

    /**
     * @param DeleteExampleTypeRequest $request
     * @return JsonResponse
     * @throws ExampleTypeDestroyException
     */
    public function destroy(DeleteExampleTypeRequest $request)
    {
        try {
            return $this
                ->setMessage(
                    __(
                        'apiResponse.deleteSuccess',
                        [
                            'resource' => Helper::getResourceName(
                                $this->exampleTypeService->exampleTypeRepository->model
                            )
                        ]
                    )
                )
                ->respond($this->exampleTypeService->delete($request->id));
        } catch (Exception $exception) {
            throw new ExampleTypeDestroyException($exception);
        }
    }
}
