<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Notifications\SendEmailNotification;
use DB;
use Illuminate\Http\Request;
use App\Models\Order;
use Notification;
use PDF;
class AdminController extends Controller
{
    public function view_category(){
        $data=Category::all();
         return view('admin.category',compact('data'));
    }
    public function add_category(Request $request){
        $data=new Category;
        $data->category_name=$request->name;
        $data->save();
        return redirect()->back()->with('message','Category added Successfully');
    }
    public function delete_category($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category deleted successfully');
    }
    public function view_product(){
        $category= Category::all();
        // $data=Product::all();
        return view('admin.product',compact('category'));
    }
    public function add_product(Request $request)
    {
        // Create a new Product instance
        $product = new Product();

        // Assign form values to the product properties
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->discount_price = $request->input('discount_price');
        $product->quantity = $request->input('quantity');
        $product->category = $request->input('category');

        // Check if a product image is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_images'), $imageName); // Save the image to a public directory

            // Store image name in the database
            $product->image = $imageName;
        }

        // Save the product to the database
        $product->save();

        // Return success message or redirect
        return redirect()->back()->with('message', 'Product added successfully');
    }
    public function show_product(){
      $product=Product::all();
      return view('admin.showproduct',compact('product'));
    }
    public function delete_product($id){
         $product=Product::find($id);
         $product->delete();
         return redirect()->back()->with('message','Product deleted Successfully');
    }
   public function edit_product($id){
    $product=Product::find($id);
    $category=Category::all();
     return view('admin.update_product',compact('product','category'));
   }
   public function update_product_confirm(Request $request, $id)
   {
       // Find the product by its ID
       $product = Product::find($id);

       // Update product fields individually
       $product->title = $request->input('title');
       $product->description = $request->input('description');
       $product->price = $request->input('price');
       $product->discount_price = $request->input('discount_price');
       $product->quantity = $request->input('quantity');
       $product->category = $request->input('category');

       // Handle image upload if provided
       if ($request->hasFile('image')) {
           $image = $request->file('image');
           $imageName = time() . '.' . $image->getClientOriginalExtension();
           $image->move(public_path('product_images'), $imageName);

           // Update the product image
           $product->image = $imageName;
       }

       // Save the updated product
       $product->save();

       // Redirect back with a success message
    //
    return redirect()->route('show_product')->with('message', 'Product updated successfully');
   }
   public function order(){
    $orders=Order::all();
    return view('admin.order',compact('orders'));
   }

public function delivery($id){
     $order=Order::find($id);
     $order->delivery_status='delivered';
     $order->payment_status= 'paid';
     $order->save();
     return redirect()->back();
}
public function pdfprint($id)
{
    $order = Order::find($id);
    // dd($order);

    // Assuming the order has a relationship with a user, and the user has a name field
    $userName = $order->name;
    $orderId = $order->id;

    // // Generate the PDF using the view 'admin.pdf'
    $pdf = PDF::loadView('admin.pdf', compact('order'));

    // // Create a custom file name based on the user's name and order ID
     $fileName = 'order_details_' . $userName . '_' . $orderId . '.pdf';

    // // Download the PDF with the dynamic name
     return $pdf->download($fileName);
}

public function sendmail($id){
$order=Order::find($id);
      return view('admin.email',compact('order'));
}
public function send_user_email(Request $request, $id){
    $order=Order::find($id);
    $details = [
        'subject'=>$request->subject,
        'recipient'=> $request->recipient,
        'body'=>$request->body,
        'button'=>$request->button,
        'url'=>$request->url


    ];
    Notification::send($order,new SendEmailNotification($details));
    return redirect()->back();
}

public function search(Request $request) {

    $searchText = $request->input('search');
    $minPrice = $request->input('min_price');
    $maxPrice = $request->input('max_price');

    $query = Order::query();

    if ($searchText) {
        $query->where('name', 'LIKE', "%$searchText%")
              ->orWhere('product_title', 'LIKE', "%$searchText%");
    }

    if ($minPrice && $maxPrice) {
        $query->whereBetween('price', [$minPrice, $maxPrice]);
    }

    if ($minPrice) {
        $query->where('price', '>=', $minPrice);
    }

    if ($maxPrice) {
        $query->where('price', '<=', $maxPrice);
    }

    $orders = $query->get();

    return view('admin.order', compact('orders'));
}



}
