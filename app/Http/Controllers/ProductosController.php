<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){

        $categorias = categoria::all();
        $productos = producto::all();

        /* cantidad de productos por categoria */ 
        $totalProductos = $productos->where($categorias,'categoria_id')->count();

        return view('admin.productos', compact('categorias', 'productos', 'totalProductos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string',
            'stock' => 'required|integer',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoria_id' => 'required|exists:categorias,id',
        ]);
    
        if ($request->hasFile('imagen')) {
            $imageName = time() . '.' . $request->imagen->extension();
            $request->imagen->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }
    
        // Crear un nuevo producto
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->imagen = $imageName;
        $producto->categoria_id = $request->categoria_id;
        $producto->save();
    
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }
    

}
