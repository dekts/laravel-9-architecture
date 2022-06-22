<?php

namespace App\Http\Controllers\Backend\Example;

use App\Http\Controllers\Controller;
use App\Services\Backend\Example\ExampleService;
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
        return view('backend.example.index');
    }

    public function create()
    {
        return view("backend.example.create");
    }
}
