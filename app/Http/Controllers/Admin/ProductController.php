<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.product.index',
        [
            'products' => Product::latest()->paginate(10)->onEachSide(0)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        Product::create($request->safe()->except('image')+['image'=>$request->file('image')->store('image','public')]);
        return to_route('admin.products.index');
    }


    public function show(Product $product): View
    {

        return view('admin.product.show',['products'=>$product]);
    }


    public function edit(Product $product):View
    {
        return view('admin.product.update',[
            'products'=>$product
        ]);
    }


    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $product->update($request->safe()->except('image'));
        if($request->file('image'))
        {
            Storage::disk('public')->delete($product->image);
            $product->update(['image'=>$request->file('image')->store('image','public')]);
        }
        return to_route('admin.products.index');
    }


    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return back();
    }
}
