<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Products index</h1>
<a href="/about-us">About Us</a>
@forelse($products as $product)
    <p>{{$product->name}}</p>

@empty
    <p>No products</p>
@endforelse
</body>
</html>
