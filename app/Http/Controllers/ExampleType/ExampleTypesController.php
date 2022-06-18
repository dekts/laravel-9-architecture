<?php

namespace App\Http\Controllers\ExampleType;

use App\Exceptions\ExampleType\ExampleTypeDestroyException;
use App\Exceptions\ExampleType\ExampleTypeNotFoundException;
use App\Exceptions\ExampleType\ExampleTypeStoreException;
use App\Exceptions\ExampleType\ExampleTypeUpdateException;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExampleType\CreateExampleTypeRequest;
use App\Http\Requests\ExampleType\DeleteExampleTypeRequest;
use App\Http\Requests\ExampleType\SearchExampleTypeRequest;
use App\Http\Requests\ExampleType\ShowExampleTypeRequest;
use App\Http\Requests\ExampleType\UpdateExampleTypeRequest;
use App\Services\ExampleType\ExampleTypeService;
use App\Transformers\ExampleType\ExampleTypeResource;
use Exception;

class ExampleTypesController extends Controller
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
     * Display a listing of the resource.
     * @param SearchExampleTypeRequest $request
     * @return Renderable|AnonymousResourceCollection
     * @throws ExampleTypeIndexException
     */
    public function index(SearchExampleTypeRequest $request)
    {
        $exampleTypes = ExampleTypeResource::collection(
            $this->exampleTypeService
                ->search($request->validated())
        );

        return view('example-type.index', compact('exampleTypes'));
    }

    /**
     * Create view for example types.
     * @return Renderable
     */
    public function create()
    {
        return view("example-type.create");
    }

    /**
     * @param ShowExampleTypeRequest $request
     * @return Renderable|AnonymousResourceCollection
     * @throws ExampleTypeNotFoundException
     */
    public function show(ShowExampleTypeRequest $request)
    {
        try {
            $exampleType = new ExampleTypeResource(
                $this->exampleTypeService
                    ->getById($request->id)
            );

            return view("example-type.show", compact('exampleType'));
        } catch (Exception $exception) {
            throw new ExampleTypeNotFoundException($exception);
        }
    }

    /**
     * @param CreateExampleTypeRequest $request
     * @throws ExampleTypeStoreException
     */
    public function store(CreateExampleTypeRequest $request)
    {
        try {
            new ExampleTypeResource(
                $this->exampleTypeService
                    ->create($request->validated())
            );

            return redirect()->route('example_types.index');

        } catch (Exception $exception) {
            throw new ExampleTypeStoreException($exception);
        }
    }

    /**
     * @param ShowExampleTypeRequest $request
     * @return Renderable|AnonymousResourceCollection
     * @throws ExampleTypeNotFoundException
     */
    public function edit(ShowExampleTypeRequest $request)
    {
        try {
            $exampleType = new ExampleTypeResource(
                $this->exampleTypeService
                    ->getById($request->id)
            );

            return view("example-type.edit", compact('exampleType'));
        } catch (Exception $exception) {
            throw new ExampleTypeNotFoundException($exception);
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
            $exampleType = new ExampleTypeResource(
                $this->exampleTypeService
                    ->update($request->validated())
            );

            return redirect()->route('example_types.index');

        } catch (Exception $exception) {
            throw new ExampleTypeUpdateException($exception);
        }
    }

    /**
     * @param DeleteExampleTypeRequest $request
     * @throws ExampleTypeDestroyException
     */
    public function destroy(DeleteExampleTypeRequest $request)
    {
        try {
            $exampleType = $this->exampleTypeService->delete($request->id);

            return redirect()->route('example_types.index');

        } catch (Exception $exception) {
            throw new ExampleTypeDestroyException($exception);
        }
    }
}
