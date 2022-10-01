<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }

    // public function headings(): array
    // {
    //     return [
    //         'ID Produk',
    //         'ID Merek',
    //         'ID Kategori',
    //         'ID Sub Kategori',
    //         'ID Sub-Sub Kategori',
    //         'Nama Produk',
    //         'Slug Produk',
    //         'Kode Produk',
    //         'Kuantitas',
    //         'Berat',
    //         'Slug Produk',
    //         'Slug Produk',
    //         'Slug Produk',
    //     ];
    // }
}
