@extends('admin.index')

@section('title', 'Inicio')
<link rel="stylesheet" href="{{ asset('css/ads.css') }}">
<link rel="stylesheet" href="{{ asset('css/productos.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@section('content-main')

    <!-- Alerts Section -->
    @if (session('success'))
        <div class="alert success">
            <strong>Success!</strong> {{ session('success') }}
        </div>
    @endif

    <section>

        <div class="d-flex justify-content-evenly">
            <div class="d-block">
                <h4 class="mb-4 text-center">Categorías</h4>
                <div id="productCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach ($categorias as $categoria)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="d-flex justify-content-evenly">
                                    @php
                                        $productosCategoria = $productos->where('categoria_id', $categoria->id);
                                    @endphp
                                    @if ($productosCategoria->count())
                                        <div class="card" style="background-color: White;">
    
                                            <div class="card-body d-grid" style="background-color: White;">
                                                <div class="d-flex  justify-content-evenly ">
                                                    <h4 class="card-title text-center">{{ $categoria->nombre }}</h4>
                                                    <button class="productos btn btn-success">Total {{$totalProductos}}</button>
                                                </div>
    
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Imagen</th>
                                                            <th scope="col">Cant.</th>
                                                            <th scope="col">Descripción</th>
                                                            <th scope="col">Precio</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($productosCategoria as $producto)
                                                            <tr>
                                                                <th>
                                                                    <img src="{{ asset('images/' . $producto->imagen) }}"
                                                                        alt="{{ $producto->imagen }}" class="img-fluid"
                                                                        width="100" height="50">
                                                                </th>
                                                                <th>{{ $producto->stock }}</th>
                                                                <td>{{ $producto->descripcion }}</td>
                                                                <td>S/. {{ number_format($producto->precio, 2) }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @else
                                        <div class="card" style="background-color: White;">
                                            <div class="card-body d-grid" style="background-color: White;">
                                                <h6 class="card-title text-center">{{ $categoria->nombre }}</h6>
                                                <p class="text-center">No hay productos en esta categoría.</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
    
                    <!-- Controles del carrusel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
            
            <div class="d-block">
                <div class="mt-3 mr-4">
                    <div class="card p-4">
                        <form action="">
                            <div class="row d-flex">
                            
                                <div class="col mb-3">
                                    <input type="text" class="form-control" id="modelo" name="nombre"
                                    placeholder="Buscar Productos">
                                    
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary w-100">Buscar</button>
                                    
                                </div>
                                
                            </div>
                        </form>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Cant.</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productosCategoria as $producto)
                                    <tr>
                                        <th>
                                            <img src="{{ asset('images/' . $producto->imagen) }}"
                                                alt="{{ $producto->imagen }}" class="img-fluid"
                                                width="100" height="50">
                                        </th>
                                        <th>{{ $producto->stock }}</th>
                                        <td>{{ $producto->descripcion }}</td>
                                        <td>S/. {{ number_format($producto->precio, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>



                <div class="mt-3 mr-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-Warning m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar Categoria
                    </button>
                    
                    <div class="card p-4">
                        <p>Registrar Productos</p>
                        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                            
                                <div class="col">
                                    <input type="file" class="form-control" id="imagen" name="imagen">
                                </div>
                            </div>
    
                            <div class="row d-flex">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="modelo" name="nombre"
                                    placeholder="Ingrese el Nombre">
                                    
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="modelo" name="descripcion"
                                        placeholder="Ingrese las caracteristicas">
                                    
                                </div>
                                
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-4"><select class="form-select" id="categoria_id" name="categoria_id">
                                    <option selected disabled>Seleccione una categoría</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                                    
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" id="stock" name="stock"
                                        placeholder="Ingrese la cantidad de productos" min="1">
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" id="precio" name="precio"
                                    placeholder="Ingrese el precio" step="0.01">
                                </div>
                            </div>
    
                            
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </section>



    <!-- Modal registrar categoria -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Categoria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <Form method="POST" action="{{ route('categorias.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <input type="text" class="form-control mb-2" id="modelo" name="nombre"
                                placeholder="Ingrese el modelo">

                            <input type="text" class="form-control mb-2" id="modelo" name="descripcion"
                                placeholder="Ingrese la descripcion o comentario">


                            <button type="submit" class="btn btn-primary">REGISTRAR</button>
                        </div>
                    </Form>
                </div>
            </div>
        </div>
    </div>


@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
