<?php

namespace App\Exports;

use App\Models\Transaksi;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class TransaksiExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $data;

    function __construct($data) {
        $this->data = $data;
    }

    public function view(): View
    {
        $data = $this->data;
        // dd($data);
        $dataProduct = Product::get();
        $data = Transaksi::skip($data['awal'])->take($data['akhir'])->get();
        
        $content = [
            'title' => 'Transaksi',
            'dataProduct' => $dataProduct,
            'data' => $data,
        ];
        return view('excel.transaksi', $content);
    }
    // public function collection()
    // {
    //     return Transaksi::all();
    // }
}
