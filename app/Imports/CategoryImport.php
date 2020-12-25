<?php

namespace App\Imports;


use App\Models\kategori;
use Maatwebsite\Excel\Concerns\ToModel;


class CategoryImport implements ToModel
{
    public function model(array $row)
    {
        return new kategori([
            'name'=>$row[0]

        ]);
    }
}
