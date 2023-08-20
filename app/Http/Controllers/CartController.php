<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class CartController extends Controller
{
    // public function addToCart(Request $request)
    // {
    //     // Retrieve the product details from the request
    //     $productId = $request->input('product_id');
    //     $quantity = $request->input('quantity', 1); // Default quantity is 1

    //     // Get the product from the database
    //     $product = Product::findOrFail($productId);

    //     // Add the product to the cart using Laravel's session
    //     $cart = session()->get('cart', []);
    //     $cart[$product->id] = [
    //         'product_id' => $product->id,
    //         'name' => $product->name,
    //         'price' => $product->price,
    //         'quantity' => $quantity,
    //     ];

    //     session()->put('cart', $cart);

    //     return response()->json(['message' => 'Product added to cart successfully']);
    // }

    public function showCart()
    {
        $data = FormData::all();
        $totalPrice = $data->sum('price');

        return view('home.show', [
            'data' => $data,
            'totalPrice' => $totalPrice,
        ]) ;
    }




    public function store(Request $request)
    {
        // Handle the form submission
        // Access form data using $request->input('fieldname')
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            // 'image'=>('image')
        ]);

        // var_dump("Hello", $data);
        // exit();

        FormData::create($data);

        // Perform necessary actions (e.g., save to database, send emails, etc.)

        return view('home.buy');
    }



    public function deleteCartItem($id)
{
    $cartItem = FormData::find($id);

    if (!$cartItem) {
        return redirect()->back()->with('error', 'Cart item not found.');
    }

    $cartItem->delete();

    return redirect()->back()->with('success', 'Cart item deleted successfully.');
}
}
