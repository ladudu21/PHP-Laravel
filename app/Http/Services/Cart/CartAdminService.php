<?php

namespace App\Http\Services\Cart;

use App\Models\Customer;

class CartAdminService
{
    public function getCustomer()
    {
        return Customer::orderByDesc('id')->paginate(15);
    }

    public function getProductForCart($customer)
    {
        return $customer->carts()->with(['product' => function ($query) {
            $query->select('id', 'name', 'thumb');
        }])->get();
    }

    public function destroy($request)
    {
        $customer = Customer::where('id', $request->input('id'));
        if ($customer) {
            return $customer->delete();
        }
        return false;
    }
}
