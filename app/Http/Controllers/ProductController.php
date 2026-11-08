<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Managemen Produk || PPKD Sticker";
        $products = Product::with('category')->get();
        // $category = Category::with('products')->count();
        return view('admin.product.index', compact('title', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Produk ||  PPKD Sticker";
        $categories = Category::all();
        return view('admin.product.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
            'price' => 'nullable|numeric',


            'price_art_cartoon' => 'nullable|numeric',
            'price_art_paper' => 'nullable|numeric',
            'price_hvs' => 'nullable|numeric',
            'price_doft' => 'nullable|numeric',
            'price_glossy' => 'nullable|numeric',
            'cutting_price' => 'nullable|numeric',
            'brief_description' => 'nullable|string',


            'slug' => 'nullable|string|unique:categories,slug,',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',

            // validasi product image
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:png,jpg,jpeg,webp|max:2048',
            'alt'    => 'nullable|array',
            'alt.*'    => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',

        ]);

        // product, product images
        // transaction
        DB::transaction(function () use ($request, $validated) {
            $slug = !empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['name']);

            $product = Product::create([
                'category_id' => $validated['category_id'],
                'name' => $validated['name'],
                'image' => null,
                'slug' => $slug,
                'price' => $validated['price'],
                'price_art_cartoon' => $validated['price_art_cartoon'],
                'price_art_paper' => $validated['price_art_paper'],
                'price_hvs' => $validated['price_hvs'],
                'price_doft' => $validated['price_doft'],
                'price_glossy' => $validated['price_glossy'],
                'cutting_price' => $validated['cutting_price'],
                'brief_description' => $validated['brief_description'],
                'description' => $validated['description'],
            ]);

            if ($request->hasFile('images')) {
                $imageData = [];
                $firstImageData = null;

                foreach ($request->file('images') as $key => $file) {
                    $path = $file->store('products', 'public');
                    if ($key === 0) {
                        $firstImageData = $path;
                    }

                    $imageData[] = [
                        'path' => $path,
                        'alt' => $request->input('alt.{$key}') ?? $product->name,
                        'sort_order' => $key + 1,
                    ];
                }
                $product->images()->createMany($imageData);
                if ($firstImageData) {
                    $product->update([
                        'image' => $firstImageData
                    ]);
                }
            }
        });
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        return $request;
        if ($request->hasFile('img')) {
            if ($product->img) {
                Storage::disk('public')->delete($product->img);
            }

            $validate['img'] = $request->file('img')->store('products', 'public');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if ($product->img) {
            Storage::disk('public')->delete($product->img);
        }

        $product->delete();
    }
}
