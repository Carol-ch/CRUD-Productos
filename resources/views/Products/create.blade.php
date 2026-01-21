<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        <h1>Nuevo Producto</h1>

        @if($errors->any())
        <div style="color: red;">
            <strong>Opps!</strong> Hay problemas con los imputs.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" name="name" placeholder="Ingrese Nombre">
            <br>
            <label for="price">Precio:</label>
            <input type="number" name="price" placeholder="Ingrese Precio">
            <br>
            <label for="description">Descripción:</label>
            <textarea name="description" placeholder="Ingrese Descripción"></textarea>
            <br>
            <button type="submit">Guardar Producto</button>
        </form>
    </body>
</html>
