<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Auth;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\View\View;;

use Illuminate\Http\RedirectResponse;

class StripePaymentController extends Controller
{
    public function stripe($totalprice): View // Accept totalprice parameter
    {
        return view('home.stripe', compact('totalprice')); // Pass totalprice to the view
    }

    public function stripePost(Request $request): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $request->amount * 100, // Adjust amount based on input
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment for amount: " . $request->amount
        ]);
        $user=Auth::user();
        $userid=$user->id;
    $data=Cart::where('user_id','=',$userid)->get();
         foreach($data as $data){
            $order= new Order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->product_title =$data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image =$data->image;
            $order->product_id = $data->product_id;
            $order->user_id =$data->user_id;
            $order->payment_status='Paid';
            $order->delivery_status='Processing';
            // Save the order to the 'orders' table
            $order->save();

         }
         Cart::where('user_id', '=', $userid)->delete();
        return back()->with('success', 'Payment successful!');
    }
}
