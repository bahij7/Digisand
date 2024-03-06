<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Product</title>
    <style>
        body{
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
<hr/>
    <h1>Adding a Product</h1>
    <form action="{{ route('submit.form') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Product's Name"/><br/>
        <input type="text" name="description" placeholder="Product's Description"/><br/>
        <input type="number" name="price" placeholder="Product's Price"/><br/>
        <input type="submit" value="Submit"/><br/>
    </form>
    

</body>
</html>