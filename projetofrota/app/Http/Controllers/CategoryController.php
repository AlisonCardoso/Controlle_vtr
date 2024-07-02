<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $user;
    private $category;
    public function __construct()
    {
        $this->user = new User();
        $this->category = new Category();
    }
    public function index()
    {
        $categories = $this->category->all();
        return view('category.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->category->all();
       // $users = $this->user->all();
       return view('category.create' , compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {/*
        $request->validate([
            'name'=> 'required |max:150',
            'description'=> 'required |max:350|string',
            'is_active'=> 'sometimes'

        ]);*/
      $category = new Category();
      //$category->user_id  = $request->user_id;
      $category->name = $request->name;
      $category->description = $request->description;
      $category->is_active = $request->is_active == true ? 1:0;

      $category->save();

        return redirect()->route('categories.create')
        ->with('status', 'Categoria cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category  $category)
    {
        $categories = $this->category->find( $category);
        return view('category.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int|string $id)
    {
        $categories = $this->category->findOrFail($id);
        return view('category.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category = new Category();
        //$category->user_id  = $request->user_id;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->is_active = $request->is_active == true ? 1:0;

        $category->save();

          return redirect()->route('categories.create')
          ->with('status', 'Categoria editada com sucesso');
      }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
