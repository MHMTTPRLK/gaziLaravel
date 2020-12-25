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

    <h2> Sliders </h2>

    <table>
        <tr>

            <th>Slider Name</th>
            <th>Slider Photo</th>

        </tr>
    @foreach($sliders as $slider)
            <tr>


                <td>{{$slider->name}}</td>
                <td>{{$slider->photo}}</td>
                <td><a href="{{route('delete.slider',$slider->id)}}">Sil</a></td>


            </tr>
        @endforeach
    </table>

    </body>
    </html>



<?php
