<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function __invoke()
    {
        // $customers = DB::table('customers')->get();
        $customers = Customer::all();
        dd($customers);
    }
}
