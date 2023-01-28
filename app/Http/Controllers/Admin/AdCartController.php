<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Cart\CartAdminService;
use App\Models\Customer;
use Illuminate\Http\Request;

class AdCartController extends Controller
{
    private $cartService;

    public function __construct(CartAdminService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        return view('admin.carts.customer', [
            'title' => 'Order List',
            'customers' => $this->cartService->getCustomer()
        ]);
    }

    public function show(Customer $customer)
    {
        $carts = $this->cartService->getProductForCart($customer);

        return view('admin.carts.details', [
            'title' => 'Order Details: ' . $customer->name,
            'customer' => $customer,
            'carts' => $carts
        ]);
    }
    
    public function destroy(Request $request)
    {
        $result = $this->cartService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Delete successfully'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
