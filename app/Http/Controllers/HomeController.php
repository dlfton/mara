<?php

namespace App\Http\Controllers;

use App\Models\admin\Barang;
use App\Models\admin\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        return view('frontend.index',["msg"=>"member page"]);
    }
    public function adminHome()
    {
        return view('admin.barang.index',["msg"=>"admin page", "title"=>"barang admin"]);
    }

    // view
    public function show(Barang $item)
    {
        return view('frontend.view', ['item' => $item]);
    }


    // cart
    public function cartMember()
    {
        return view('frontend.cart.cart');
    }

    // transaksi
    public function transactionMember()
    {
        return view('frontend.transaction.transaction');
    }

    // account
    public function accountMember()
    {
        return view('frontend.account.account');
    }
}
