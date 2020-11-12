<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function get(Request $request,$id)
    {
        $product = Transaction::with(['detail.product'])->find($id);

        if($product)
        {
            return ResponseFormater::success($product,'Data Product Berhasil DIambil');
        }else{
            return ResponseFormater::error(null,'Data Tranasksi Tidak Ada');
        }
    }
}
