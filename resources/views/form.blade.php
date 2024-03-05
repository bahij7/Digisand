<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    
    <form action="{{ route('submit.form') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Product's Name"/><br/>
        <input type="text" name="description" placeholder="Product's Description"/><br/>
        <input type="number" name="price" placeholder="Product's Price"/><br/>
        <input type="submit" value="Submit"/><br/>
    </form>
    

</body>
</html>