<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        <h1>Listado de Productos</h1>

        <a href="{{route('products.create')}}">Crear Producto</a>

        <table border="1">
            <tr>
                <th> ID </th>
                <th> Nombre </th>
                <th> Precio </th>
                <th> Descripcion </th>
            </tr>

            @foreach ($products as $product)
                <tr>
                    <td> {{ $product->id }} </td>
                    <td> {{ $product->name }} </td>
                    <td> {{ $product->price }} </td>
                    <td> {{ $product->description }} </td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" >Mostrar</a>
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
