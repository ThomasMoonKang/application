<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

//use App\Http\Requests;

class CustomerController extends Controller
{
    //
    public function customer($id) {
        $customer = Customer::find($id);
    	//return view ('customer', array('customer' => $customer));
    	return view ('customer', compact('customer'));
    }
}
