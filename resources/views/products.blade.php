<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>See All The Products</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Navbar</h1>
    <a href="/">Add a Product</a>
    <a href="/delete">Delete a Product</a>
    <a href="/products">See products</a>
<hr/>
    <h1>Liste des produits</h1>
    <table border="1">
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <th>{{$product->name}}</th>
                <th>{{$product->description}}</th>
                <th>{{$product->price}}</th>
            </tr>
            @endforeach
    </table>

    <a href="/delete">Delete a Product</a>


</body>
</html>