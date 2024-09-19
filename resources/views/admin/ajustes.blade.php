@extends('admin.index')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@section('title', 'Ajustes de Perfil')

<style>
    .main-content {
        margin-left: 0;
        padding: 20px; /* Espacio alrededor del contenido */
        display: flex;
        justify-content: center; /* Centra horizontalmente */
        align-items: center; /* Centra verticalmente */
        height: 100vh; /* Ocupa toda la altura de la ventana */
    }

    .settings-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 800px;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .settings-card {
        width: 100%;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .settings-card h3 {
        margin-top: 0;
        color: #003366;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="password"],
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group textarea {
        resize: vertical;
    }

    button {
        background-color: #00aaff;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #007acc;
    }

    .additional-options {
        margin-top: 20px;
        padding: 10px;
        border-top: 1px solid #ddd;
    }

    .additional-options h4 {
        margin-top: 0;
        color: #003366;
    }

    .additional-options .form-group {
        margin-bottom: 10px;
    }
</style>

@section('content-main')

    <section>
        <div class="main-content">
            <div class="settings-container">
                <div class="settings-card">
                    <h3>Ajustes de Perfil</h3>

                    <form>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" placeholder="Tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" id="email" placeholder="Tu correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" placeholder="Nueva contraseña">
                        </div>
                        <div class="form-group">
                            <label for="bio">Biografía:</label>
                            <textarea id="bio" rows="4" placeholder="Escribe algo sobre ti"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="profile-picture">Foto de Perfil:</label>
                            <input type="file" id="profile-picture">
                        </div>
                        <div class="form-group">
                            <label for="language">Idioma Preferido</label>
                            <select id="language">
                                <option value="en">Inglés</option>
                                <option value="es">Español</option>
                                <option value="fr">Francés</option>
                                <option value="de">Alemán</option>
                                <option value="pt">Portugués</option>
                                <!-- Agrega más opciones según sea necesario -->
                            </select>
                        </div>
                        <button type="submit">Guardar Cambios</button>
                    </form>

                    <!-- Opciones adicionales -->
                    <div class="additional-options">
                        <h4>Opciones Adicionales</h4>
                        <div class="form-group">
                            <label for="newsletter">Suscribirse al Boletín:</label>
                            <input type="checkbox" id="newsletter"> Sí, quiero recibir actualizaciones.
                        </div>
                        <div class="form-group">
                            <label for="notifications">Notificaciones:</label>
                            <input type="checkbox" id="notifications"> Habilitar notificaciones por correo electrónico.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
