<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Produits</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .alert{
            background: lightcoral;
            color: red;
            width: fit-content;
            padding: 4px 10px;
        }
    </style>
</head>
<body>
    
    <p class="alert">Language: {{ $languageMessage }}</p>
    <h1>Navbar</h1>
    <a href="/">Add a Product</a>
    <a href="/delete">Delete a Product</a>
    <a href="/products">See products</a>
    <hr />

    <h1>Liste des produits</h1>
    @if (session('success'))
        <div style="background: lightgreen">
            {{ session('success') }}
        </div>
    @endif


    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Commentaires</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    @forelse ($product->comments as $comment)
                    <p>{{ $comment->content }}</p>
                @empty
                    <p>No comments available</p>
                @endforelse
                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>
