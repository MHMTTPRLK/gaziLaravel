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

    <h2>Kullanıcı Urunleri</h2>

    <table>
        <tr>
            <th>User Name</th>
            <th>User Product</th>
            <th>Product Price</th>

        </tr>
        @foreach($datam as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->productName}}</td>
                <td>{{$data->price}}</td>


            </tr>
        @endforeach
    </table>

    </body>
    </html>



