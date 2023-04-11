<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\userForm;
use App\Models\admin\Barang;
use App\Models\admin\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        return view('livewire.member.cart');
    }

    // transaksi
    public function transactionMember()
    {
        return view('frontend.transaction.transaction');
    }

    // account
    public function accountMember()
    {
        return view('frontend.account.account')->with('user', auth()->user());
    }
    public function accountUpdate(Request $request){
        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255',
            'phone' =>'required|min:4|string|max:255',
            'alamat' =>'required|min:4|string|max:255',
        ]);
        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->alamat = $request['alamat'];
        $user->save();
        return back()->with('msg','Profile Updated');
    }
    public function password()
    {
        return view('frontend.account.pass')->with('user', auth()->user());
    }
    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("msg", "Password changed successfully!");
    }
}
