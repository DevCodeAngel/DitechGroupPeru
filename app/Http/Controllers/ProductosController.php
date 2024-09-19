<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $categorias = categoria::all();
        $productos = producto::all();  // Todos los productos por defecto
        $totalProductos = producto::count();  // Total de productos

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

    public function search(Request $request)
    {
        // Validar el nombre para la búsqueda
        $request->validate([
            'nombre' => 'nullable|string|max:255',
        ]);

        // Obtener el valor de búsqueda del request
        $nombre = $request->input('nombre');

        // Inicializar la consulta de productos
        $query = producto::query();

        // Aplicar filtro por nombre si se proporciona
        if ($nombre) {
            $query->where('nombre', 'like', "%$nombre%");
        }

        // Ejecutar la consulta y obtener los productos
        $productoSearch = $query->get();
        $totalProductos = $productoSearch->count();  // Contar productos encontrados

        // Obtener todas las categorías
        $categorias = categoria::all();
        $productos = producto::all();
        $totalProductosSearch = $productoSearch->count();

        // Pasar los productos encontrados, categorías y otros datos a la vista
        return view('admin.productos', compact('categorias', 'productoSearch', 'totalProductos','productos','totalProductosSearch'));
    }
}
