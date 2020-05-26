<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum\Gateways\BackendGateway;
use App\Forum\Interfaces\BackendRepositoryInterface;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(BackendGateway $bG, BackendRepositoryInterface $bR)
    {
        $this->bG = $bG;
        $this->bR = $bR;
    }
    public function index()
    {
        return view('backend.categories.index',['categories'=>$this->bR->getCategories()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->bG->createCategory($request);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->bR->getCategoryById($id);
        
        return view('categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->bG->updateCategory($request, $id);

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->bR->deleteCategory($id);

        return redirect()->back();
    }
}
