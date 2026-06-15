<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function orders(Request $request)
    {
        $viewData = [];
        $viewData["title"] = "My Orders - Online Store";
        $viewData["subtitle"] = "My Orders";

        // Menggunakan Eager Loading dengan 'with' untuk efisiensi database
        $viewData["orders"] = Order::with(['items.product'])
            ->where('user_id', Auth::id())
            ->get();

        return view('myaccount.orders')->with("viewData", $viewData);
    }
}
