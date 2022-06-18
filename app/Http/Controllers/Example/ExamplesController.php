<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Services\Example\ExampleService;
use Illuminate\Contracts\Support\Renderable;

class ExamplesController extends Controller
{
    /**
     * @var ExampleService
     */
    private $exampleService;

    /**
     * @param ExampleService $exampleService
     */
    public function __construct(ExampleService $exampleService)
    {
        $this->exampleService = $exampleService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('example.index');
    }

    public function create()
    {
        return view("example.create");
    }
}
