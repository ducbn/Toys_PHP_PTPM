<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $products = Product::query();

        // Lọc theo danh mục nếu có
        if ($request->filled('category_id')) {
            $products->where('category_id', $request->category_id);
        }

        // Tìm kiếm theo tên sản phẩm
        if ($request->filled('search')) {
            $products->where('name', 'LIKE', '%' . $request->search . '%');
        }

        $products = $products->get();

        return view('products.index', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }

        Product::create(array_merge($request->all(), ['image' => $imagePath]));

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được thêm!');
    }
}
