<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));

    }

    public function create()
    {
        //Retornar la vista 'products-create'para-crear-un-nuevo-producto
        return view('products.create');
    }

    public function store(Request $request)
    {
        //validamos-Formulario
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        //Creamos-un-nuevo-Producto-con-los-datos-Validados
        Product::create($request->all());
        //Redirigir-a-la-lista-de-Productos-con-un-msj-Exitoso
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

// Visualizar la lista de Productos
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    
    public function update(Request $request, string $id)
    {
        //validamos-Formulario
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);
        return redirect()->route('products.index')->with('success', 'Product Actualizacion successfully.');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
