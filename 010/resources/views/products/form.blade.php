<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    
        <input type="text" name="title" placeholder="Product Name" />
        <input type="file" name="prd_img" placeholder="Product Image" />
        <button type="submit">Register Product</button>
    
    </form>
</body>
</html>