<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\producto;
use Illuminate\Http\Request;

class PageController extends Controller      
{
    public function index()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();
        
        // Filtrar productos que pertenecen a la categoría "Laptops"
        $laptopCategoria = Categoria::where('nombre', 'Laptops')->first();

        // Check if $laptopCategoria is null
        if ($laptopCategoria) {
            $productosLaptops = $productos->where('categoria_id', $laptopCategoria->id);
        } else {
            // Handle the case where no category is found
            $productosLaptops = collect(); // Empty collection
        }

        // Pasar los datos a la vista
        return view('welcome', [
            'categorias' => $categorias,
            'productos' => $productosLaptops, // Solo productos de Laptops
        ]);
    }

}
