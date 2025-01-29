<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<style>
   body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

/* HEADER */
header {
    padding: 20px;
    text-align: center;
    color: #333;
}

header h1 {
    font-size: 2.5rem;
    margin: 0;
}

header p {
    font-size: 1.2rem;
    margin-top: 10px;
    font-weight: lighter;
}

/* Enlaces en el HEADER */
nav {
    margin-top: 20px;
}

nav a {
    margin: 0 15px;
    font-size: 1.1rem;
    color: #4caf50;
    text-decoration: none;
    transition: color 0.3s ease;
}

nav a:hover {
    color: #2c6b32;
}

/* HERO */
.hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 40px;
    background-color: #fff;
}

.hero-text {
    max-width: 600px;
}

.hero-text h2 {
    color: #2c6b32;
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.hero-text p {
    color: #555;
    font-size: 1.1rem;
    line-height: 1.8;
}

.hero-image {
    max-width: 600px;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

/* FOOTER */
footer {
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
    background-color: transparent;
}

footer p {
    font-size: 1rem;
}

/* Estilo adicional */
.container {
    width: 85%;
    max-width: 1400px;
    margin: 60px auto;
    padding: 40px;
    background-color: #fff;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

h1 {
    color: #2c6b32;
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 40px;
}

p {
    color: #555;
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 20px;
}

/* Estilo de tabla */
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    font-size: 1rem;
    color: #333;
}

th {
    background-color: #4caf50;
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #fafafa;
}

tr:hover {
    background-color: #e5f1e4;
}

/* Botones */
.btn {
    display: inline-block;
    padding: 10px 20px;
    color: white;
    background-color: #4caf50;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #45a049;
}

.btn-danger {
    background-color: #f44336;
}

.btn-danger:hover {
    background-color: #d32f2f;
}

.actions {
    display: flex;
    gap: 10px;
}

.btn-container {
    text-align: right;
    margin-bottom: 20px;
}

/* Paginación */
.pagination {
    list-style-type: none;  /* Eliminar los puntos de lista */
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    gap: 15px;  /* Espaciado entre los enlaces */
    flex-wrap: wrap;
}

.pagination li {
    display: inline-block;
}

.pagination a,
.pagination .page-link {
    padding: 12px 20px;  /* Más relleno para un botón más grande */
    margin: 0 5px;
    background-color: #f1f1f1;
    border: 1px solid #ddd;
    color: #4caf50; /* Verde */
    text-decoration: none;
    display: inline-block;
    border-radius: 50px;  /* Bordes redondeados para un estilo moderno */
    font-size: 14px;
    font-weight: 600;  /* Texto en negrita */
    text-align: center;
    transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease; /* Transición suave y efecto de escala */
}

/* Hover cuando pasas el mouse por encima */
.pagination a:hover {
    background-color: #4caf50; /* Verde al pasar el mouse */
    color: white;  /* Texto blanco */
    border-color: #45a049; /* Borde un poco más oscuro */
    transform: scale(1.1); /* Efecto de ampliación */
}

/* Elemento activo */
.pagination .active a {
    background-color: #4caf50; /* Verde activo */
    color: white;  /* Texto blanco */
    border-color: #45a049; /* Borde más oscuro */
    box-shadow: 0 0 10px rgba(76, 175, 80, 0.5);  /* Sombra suave */
}

/* Para la paginación cuando está deshabilitada (ej. primera página) */
.pagination .disabled a {
    background-color: #e0e0e0;
    color: #b0b0b0;
    pointer-events: none;
    cursor: not-allowed;
    transform: none;  /* Sin efecto de escala */
}

/* Paginación con iconos */
.pagination .page-link svg {
    width: 16px;
    height: 16px;
    margin-right: 5px; /* Separación entre el icono y el texto */
}

/* Paginación con bordes y sombras sutiles */
.pagination a,
.pagination .page-link {
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);  /* Sombra sutil para dar profundidad */
}

.pagination a:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);  /* Sombra más fuerte en el hover */
}



/* Responsive design */
@media (max-width: 768px) {
    .hero {
        flex-direction: column;
        align-items: center;
    }

    .hero-text {
        text-align: center;
        margin-bottom: 20px;
    }

    .hero-image {
        max-width: 100%;
        width: 100%;
        height: auto;
    }
}

/* Estilo para el formulario de creación */
.form-title {
    color: #2c6b32;
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 30px;
}

/* Formulario */
.form-create {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto;
}

/* Estilos de campos del formulario */
.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    font-size: 1.1rem;
    color: #333;
    margin-bottom: 8px;
}

.form-input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 1rem;
    color: #333;
    background-color: #f9f9f9;
    transition: border-color 0.3s ease, background-color 0.3s ease;
}

.form-input:focus {
    border-color: #4caf50;
    background-color: #eef6ec;
    outline: none;
}

/* Botón de envío */
.form-btn {
    display: inline-block;
    padding: 12px 20px;
    color: white;
    background-color: #4caf50;
    border: none;
    border-radius: 6px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    width: 100%;
    text-align: center;
}

.form-btn:hover {
    background-color: #45a049;
    transform: scale(1.05);
}

.form-btn:active {
    transform: scale(1);
}

/* Estilos para los select y textarea */
textarea.form-input {
    height: 150px;
    resize: none;
}

</style>
</head>

<body>
@yield('content')
</body>

</html>