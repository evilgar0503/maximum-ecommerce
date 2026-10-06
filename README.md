# Maximum · Tienda online de alimentación para mascotas

Proyecto final del CFGS en Desarrollo de Aplicaciones Web (2023). E-commerce completo desarrollado en solitario con Laravel: catálogo, carrito, checkout, facturación en PDF, valoraciones, blog y panel de administración.

<!-- Añadir capturas en docs/screenshots/ y enlazarlas aquí: portada, ficha de producto, checkout y panel de administración. -->

## Funcionalidades

**Tienda**
- Catálogo con ficha de producto: descripción, ingredientes, instrucciones, marca, sabor, edad y peso.
- Control de stock con aviso de producto agotado.
- Carrito persistente en sesión y checkout con métodos de pago y de envío configurables.
- Datos de envío y de facturación independientes en cada pedido.
- Factura del pedido generada en PDF.
- Seguimiento de pedidos desde la cuenta del cliente (pendiente, procesado, enviado).
- Valoraciones de producto por estrellas.

**Contenido**
- Blog con noticias y comentarios de usuarios.
- Formulario de contacto que genera avisos para el equipo.

**Administración** (componentes reactivos con Livewire)
- Gestión de usuarios, productos, pedidos, avisos y métodos de pago y envío.
- Tres roles: cliente, empresa (con precio específico por producto) y administrador.
- Rutas de administración protegidas por middleware de rol.

## Stack

| Capa | Tecnología |
|------|-----------|
| Backend | PHP 8.1, Laravel 10, Livewire 2 |
| Frontend | Blade, Tailwind CSS, Alpine.js, Swiper, Vite |
| Base de datos | MySQL, migraciones y seeders de Eloquent |
| Autenticación | Laravel Breeze (registro, login, verificación de email, recuperación de contraseña) |
| PDF | barryvdh/laravel-dompdf |
| Carrito | darryldecode/cart |

## Modelo de datos

`User` · `Producto` · `Pedido` · `ProductoPedido` · `MetodoPago` · `MetodoEnvio` · `Valoracion` · `Noticia` · `Comentario` · `Avisos`

Un pedido pertenece a un usuario, a un método de pago y a uno de envío, y se relaciona con sus productos mediante `ProductoPedido`, que guarda las líneas del pedido.

## Puesta en marcha

Requisitos: PHP 8.1+, Composer, Node.js 18+ y MySQL.

```bash
cd maximum
composer install
npm install && npm run build

cp .env.example .env
php artisan key:generate
# Configura DB_DATABASE, DB_USERNAME y DB_PASSWORD en .env

php artisan migrate --seed
php artisan storage:link
php artisan serve
```

El seeder crea datos de ejemplo y un usuario administrador:

- Email: `admin@example.com`
- Contraseña: la definida en `SEED_ADMIN_PASSWORD` en `.env` o, si no existe, `password`.

## Estructura

```
maximum/
├── app/Http/Controllers   # Tienda, carrito, pedidos, blog, PDF
├── app/Http/Livewire      # Componentes del panel de administración
├── app/Models             # Modelos Eloquent
├── database/migrations    # Esquema de la base de datos
├── resources/views        # Vistas Blade (tienda, blog, admin, PDF)
└── routes/web.php         # Rutas públicas, de cliente y de administración
```

## Autor

**Eduardo Villar García** · [GitHub](https://github.com/evilgar0503)
