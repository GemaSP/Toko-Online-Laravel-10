<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;

class BerandaController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $produk = Produk::where('status', 1)->orderBy('updated_at', 'desc')->paginate(6);
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->get();
        $customer = Customer::where('user_id', Auth::id())->first();
        $order = null;

        if ($customer) {
            $order = Order::where('customer_id', $customer->id)
                ->whereIn('status', ['pending', 'paid']) // gunakan whereIn bukan dua where untuk status
                ->first();

            if ($order) {
                $order->load('orderItems.produk');
            }
        }

        $orderIds = Order::where('user_id', $userId)->pluck('id');

        return view('v_beranda.index', [
            'judul' => 'Halan Beranda',
            'produk' => $produk,
            'kategori' => $kategori,
            'order' => $order,
        ]);
    }
    public function berandaBackend()
    {
        return view('backend.v_beranda.index', [
            'judul' => 'Halaman Beranda',
        ]);
    }
}
