<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Index</h1>
    <a href="/product/create">create</a>
    <a href="<?php echo route('product.create')?>">create</a>
    <a href="{{route('product.create')}}">create</a>
</body>
</html>