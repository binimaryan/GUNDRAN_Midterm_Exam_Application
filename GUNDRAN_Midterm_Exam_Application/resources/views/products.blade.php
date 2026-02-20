<!DOCTYPE html>
<html>
<head>
    <title>Anime Products</title>
</head>
<body>

    <h1>Anime Products</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Author</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{ $product['title'] }}</td>
            <td>{{ $product['genre'] }}</td>
            <td>{{ $product['author'] }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>