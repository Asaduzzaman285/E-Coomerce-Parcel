<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $product = Product::paginate(3);
        return view('home.userpage', compact('product'));
    }

    public function redirect()
{
    $usertype = Auth::user()->usertype;

    if ($usertype == '1') {
        // Admin dashboard data calculations
        $totalrevenue = 0;
        $delivery = Order::where('delivery_status', '=', 'delivered')->count();
        $processing = Order::where('delivery_status', '=', 'Processing')->count();
        $revenue = Order::all();

        foreach ($revenue as $item) {
            $totalrevenue += $item->price;
        }

        $totalrevenue = $totalrevenue * 0.10;
        $users = User::where('usertype', 0)->count();
        $orders = Order::all()->count();
        $products = Product::all()->count();

        return view('admin.home', compact('products', 'orders', 'users', 'totalrevenue', 'delivery', 'processing'));
    } elseif ($usertype == '2') {
        // Flash a welcome message for riders
        $product = Product::paginate(3);
        // session()->flash('message', 'Welcome to Rider Dashboard');
        return view('rider.home');
        // return redirect()->route('home.userpage', compact('product'));
    } else {
        // Default user view
        $product = Product::paginate(3);
        return view('merchant.home', compact('product'));
    }
}

    public function details_product($id){
        $product = Product::find($id);
        return view('home.details_page', compact('product'));
    }
    public function add_to_cart(Request $request,$id){
             if(Auth::id()){
                $user=Auth::user();
                $product=Product::find($id);
               $cart=new Cart();
               $cart->name= $user->name;
               $cart->email=$user->email;
               $cart->phone=$user->phone;
               $cart->address=$user->address;
               $cart->product_title=$product->title;
               if($product->discount_price !='0'){
                  $cart->price=$product->discount_price *$request->quantity;
               }
               else{
                  $cart->price=$product->price * $request->quantity;
               }

               $cart->image=$product->image;
               $cart->quantity =$request->quantity;
               $cart->user_id=$user->id;
               $cart->product_id=$product->id;
               $cart->save();
                return redirect()->back();
               //  dd($user);
               //  return redirect()->back();
             }
             else {
                return redirect('login');
             }
    }
    public function show_cart(){
        if(Auth::id()){
            $id= Auth::user()->id;
            $cart=Cart::where('user_id','=', $id)->get();
           return view('home.show_cart',compact('cart'));
        }
        else{
            return redirect('login');
        }

    }
    public function remove_product($id){
        $cart=Cart::find($id);
        $cart->delete();
        return  redirect()->back();
    }
    public function cash_order(){
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
            $order->payment_status='Cash On Delivery';
            $order->delivery_status='Processing';
            // Save the order to the 'orders' table
            $order->save();

         }
         Cart::where('user_id', '=', $userid)->delete();
         return redirect()->back()->with('message','We received your order, we will connect soon ....');
    }
    public function stripe($totalprice){
        return view('home.stripe',compact('totalprice'));
    }

}
