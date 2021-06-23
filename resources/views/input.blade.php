<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input</title>
</head>
<body>
<form action="/input" method="POST">
    @csrf
    <p>
        <input type="text" name="productDescription" placeholder="Product Description">
    </p>
    <p>
        <input type="text" name="price" placeholder="List Price">
    </p>
    <p>
        <input type="text" name="discountPercent" placeholder="Discount Percent">
    </p>
    <p>
        <button type="submit">Send</button>
    </p>
</form>
</body>
</html>
