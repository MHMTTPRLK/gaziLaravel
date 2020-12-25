<DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>
<body>

<h2>Urunler</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Photo</th>
        <th>Category</th>
        <th>Created BY</th>

    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->productName}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->photo}}</td>
            <td>{{$product->get_Category->name}}</td>
            <td>{{$product->user[0]->name}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>


