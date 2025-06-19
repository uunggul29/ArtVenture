<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Produk;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('admin.product', compact('data'));
    }


    public function add_product(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->product;
        $product->save();
        return redirect()->back();
    }

    //error disini
    public function delete_category($id)
    {
        $data = Product::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function add_produk()
    {
        $product = Product::all();

        return view('admin.add_produk', compact('product'));
    }

    public function upload_produk(Request $request)
    {
        $data = new Produk;

        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->category = $request->category;
        $data->quantity = $request->quantity;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('produk', $imagename);
            $data->image = $imagename;
        }

        $data->save();

        // return redirect()->back();
        return redirect()->back()->with('message', 'Product added successfully!');
        
    }

    public function view_produk()
    {
        $produk = Produk::all();
        $product = Product::all();
        return view('admin.view_produk', compact('produk', 'product'));
    }

    public function delete_produk($id)
    {
        $data = Produk::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function view_order()
    {
        $data = Order::all();
        return view('admin.order', compact('data'));
    }

    // --- Tambahan Method delete_cart() ---
    public function delete_cart($id)
{
    $order = Cart::find($id);
    if (!$order) {
        return redirect()->back()->with('error', 'Order not found.');
    }
    $order->delete();
    return redirect()->back()->with('message', 'Order deleted successfully!');
}
    // --- END: Tambahan Method delete_cart() ---

    public function on_the_way($id)
    {
        $data = Order::find($id);
        $data->status = 'On The Way';
        $data->save();
        return redirect('/view_order');
    }

    public function delivered($id)
    {
        $data = Order::find($id);
        $data->status = 'Delivered';
        $data->save();
        return redirect('/view_order');
    }

    public function print_pdf($id)
    {
        $data = Order::find($id);
        $pdf = Pdf::loadView('admin.invoice', compact('data'));
        return $pdf->download('invoice.pdf');
    }

    public function edit_produk($id)
    {
        $produk = Produk::findOrFail($id);
        $product = Product::all(); // Jika perlu menampilkan kategori produk di form
        return view('admin.edit', compact('produk', 'product'));
    }

    public function update_produk(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = Produk::findOrFail($id);

        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->category = $request->category;
        $data->quantity = $request->quantity;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($data->image && file_exists(public_path('produk/' . $data->image))) {
                unlink(public_path('produk/' . $data->image));
            }

            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('produk', $imagename);
            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }
}
