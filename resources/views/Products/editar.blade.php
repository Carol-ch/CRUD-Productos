<h1>Editar</h1>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        <h1>Editar Producto</h1>

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

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="{{ $product->name }}" placeholder="Ingrese Nombre">
            <br>
            <label for="price">Precio:</label>
            <input type="number" name="price" value="{{ $product->price }}" placeholder="Ingrese Precio">
            <br>
            <label for="description">Descripción:</label>
            <textarea name="description" placeholder="Ingrese Descripción">{{ $product->description }}</textarea>
            <br><br>
            <button type="submit">Actualizar Producto</button>
        </form>
    </body>
</html>
