<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete a Product</title>
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

    <p>id of the product you want to delete :</p>

    <form action="{{route('delete-product')}}" method="post">
        @csrf
        <input type="number" name="id-deleted" placeholder="id"/><br/>
        <input type="submit" value="submit"/>
    </form>
</body>
</html>