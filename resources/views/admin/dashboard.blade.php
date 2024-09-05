@extends('admin.index')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@section('title', 'Inicio')

<style>
    .main-content {
        margin-left: 0;
        padding: 0;

    }

    header {
        background-color: #00aaff;
        /* Color de fondo azul */
        color: #fff;
        /* Texto en blanco */
        padding: 20px;
        /* Mayor espacio interno */
        border-radius: 10px 10px 0 0;
        /* Bordes redondeados en la parte superior */
        margin-bottom: 20px;
        /* Espacio debajo del header */
        text-align: center;
        /* Centra el texto */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Sombra más sutil y estilizada */
        font-size: 1.0rem;
        /* Tamaño de fuente más grande para el encabezado */
        font-weight: bold;
        /* Texto en negrita */
        border-bottom: 2px solid #007acc;
        /* Línea en la parte inferior */
        position: relative;
        /* Para la posible manipulación de elementos dentro del header */

    }




    .cards-section {
        display: flex;
        gap: 20px;
        /* Ajusta el espacio entre tarjetas según lo necesario */

        border-radius: 50px 0 50px 0;
        /* Bordes redondeados */
        width: 100%;
        background: linear-gradient(135deg, #00aaff, #ffffff);
        /* Degradado azul celeste a blanco */
        height: 150px;
        /* Ajusta la altura según el contenido */

        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Sombra sutil */
        align-items: center;
        /* Alinea los elementos dentro de la sección verticalmente */

    }


    .card {

        background-color: #fff;
        border-radius: 5px;
        padding: 20px;

        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        flex: 1 1 250px;
        max-width: 300px;
        transition: transform 0.2s;

    }

    .card:hover {
        transform: scale(1.05);
    }

    .card h3 {
        margin: 0;
        color: #003366;

    }

    .card p {
        font-size: 24px;
        margin: 10px 0;
    }

    .card i {
        font-size: 25px;
        color: #00aaff;
    }

    .charts {

        display: flex;
        gap: 20px;
        margin-bottom: 20px;
        height: 40%;
    }

    .chart {

        flex: 1;
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .chart-content {
        height: 280px;
        background-color: #e0e0e0;
        border-radius: 5px;

    }


    .data-table {
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .data-table table {
        width: 100%;
        border-collapse: collapse;
    }

    .data-table th,
    .data-table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .data-table th {
        background-color: #00aaff;
        color: #fff;
    }

    .alert {
        padding: 15px;
        background-color: #ff9800;
        color: #fff;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .alert.success {
        background-color: #4caf50;
    }

    .alert.error {
        background-color: #f44336;
    }

    .alert.warning {
        background-color: #ff9800;
    }
</style>

@section('content-main')

    <section>
        <div class="main-content">

            <header>
                <h1>Dashboard Overview</h1>
            </header>

            <!-- Alerts Section -->
            @if (session('alert'))
                @php
                    $alert = session('alert');
                @endphp
                <div class="alert {{ $alert['type'] }}">
                    <strong>{{ ucfirst($alert['type']) }}!</strong> {{ $alert['message'] }}
                </div>
            @endif

            <!-- Cards Section -->
            <div class="cards-section">
                <div class="card">
                    <h4>Total Sales</h3>
                        <p>$24,000</p>
                        <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card">
                    <h4>New Users</h3>
                        <p>1,234</p>
                        <i class="fas fa-user-plus"></i>
                </div>
                <div class="card">
                    <h47>Pending Orders</h3>
                        <p>123</p>
                        <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card">
                    <h4>Productos Más Vendidos</h4>
                    <p>$24,000</p>
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="card">
                    <h4>Productos Agotados</h4>
                    <p>1,234</p>
                    <i class="fas fa-box-open"></i>
                </div>
                <div class="card">
                    <h4>Clientes Activos</h4>
                    <p>123</p>
                    <i class="fas fa-users"></i>
                </div>
                <div class="card">
                    <h4>Pedidos Pendientes</h4>
                    <p>45</p>
                    <i class="fas fa-clock"></i>
                </div>
                <div class="card">
                    <h4>Pedidos Completados</h4>
                    <p>789</p>
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="card">
                    <h4>Visitas al Sitio Web</h4>
                    <p>12,345</p>
                    <i class="fas fa-globe"></i>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="charts">
                <div class="chart">
                    <h3>Sales Overview</h3>
                    <!-- Placeholder for chart -->
                    <div class="chart-content"></div>
                </div>
                <div class="chart">
                    <h3>User Growth</h3>
                    <!-- Placeholder for chart -->
                    <div class="chart-content"></div>
                </div>
            </div>

            <!-- Data Table Section -->
            <div class="data-table">
                <h3>Recent Transactions</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>$120</td>
                            <td>2024-09-01</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>$150</td>
                            <td>2024-09-02</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Emily Johnson</td>
                            <td>$200</td>
                            <td>2024-09-03</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('script.js') }}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const ctx1 = document.createElement('canvas');
                document.querySelectorAll('.chart-content')[0].appendChild(ctx1);

                const ctx2 = document.createElement('canvas');
                document.querySelectorAll('.chart-content')[1].appendChild(ctx2);

                new Chart(ctx1, {
                    type: 'line',
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                        datasets: [{
                            label: 'Sales',
                            data: [12, 19, 3, 5, 2, 3, 7],
                            borderColor: '#00aaff',
                            backgroundColor: 'rgba(0, 170, 255, 0.2)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                new Chart(ctx2, {
                    type: 'bar',
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                        datasets: [{
                            label: 'New Users',
                            data: [7, 11, 5, 8, 6, 4, 9],
                            backgroundColor: '#00aaff'
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
    </section>

@endsection
