<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    private $category;
    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }
    public function index()
    {
       // $products = $this->product->all();
       $products = Product::latest('id')->get();
        return view('product.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = $this->product->all();
        $categories = $this->category->all();
       $title = "Adicionar novo produto";
       // return view('product.create' , compact('title'));
      return view('product.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product->create([

            'name' =>$request->name,
            'image'=>$request->image,
            'description'=>$request->description,
            'category_id'=>$request-> category_id

        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $products = $this->product->find($product);
        return view('product.show', compact('products') );



    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $products = $this->product->find( $product);
        $categories = $this->category->all();
        return view('product.edit' , compact('categories'));
        //return view('product.create' , compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->product->update([

            'name' =>$request->name,
            'image'=>$request->image,
            'description'=>$request->description,
            'category_id'=>$request-> category_id

        ]);

            if ($request->hasfile('image')) {
                $filePath = public_path('uploads');
                $file = $request->file('image');
                $file_name = time() . $file->getClientOriginalName();
                $file->move($filePath, $file_name);
                // delete old photo
                if (!is_null($update->image)) {
                    $oldImage = public_path('uploads/' . $update->image);
                    if (File::exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
                $update->image = $file_name;
            }

            $result = $update->save();
            Session::flash('success', 'User updated successfully');
            return redirect()->route('user.index');
        }






    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
