<h1>Mostrar </h1>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        <h1>Producto Detalle</h1>
        <a href="{{route('products.index')}}">atras</a>
        <br>
        <label> ID: </label>
        <P>{{ $product->id }}</P>
        <br>
        <label> Precio:</label>
        <br>
        <p>{{ $product->price }}</p>
        <label> Descripción:</label>
        <p>{{ $product->description }}</p>
    </body>
</html>
