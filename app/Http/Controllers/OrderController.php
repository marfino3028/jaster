<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\User;
use App\Orders;
use App\ProgressList;
use App\Website;
use App\Transaksi;

use App\Notifications\addedNotes;
use App\Notifications\addedRequest;
class OrderController extends Controller
{
    // show all orders function
    public function index() {
        $order = Orders::latest()->get();

        return view('backend.pages.list-order', compact('order'));
    }

    // add order function
    public function store(Request $request)
    {
         $validateOrder = $request->validate([
             'nama'    => 'required|max: 191',
             'brand'    => 'required',
             'jabatan'    => 'required',
             'wa'    => 'required',
             'alamat'    => 'required',
             'via'    => 'required',
             'tau_dari' => 'required',
             'data_logo'     => 'required',
             'data_website'  => 'required',
             'tipe_post'     => 'required',
             'target'        => 'required',
             'warna'         => 'nullable',
             'akun_username' => 'nullable',
             'akun_email'    => 'nullable',
             'akun_password' => 'nullable',
             'deadline'      => 'nullable',
             'dp'   => 'nullable',
             'renewal'   => 'nullable',


         ]);

         $order = Orders::create($validateOrder);

         $validateWebAkun = $request->validate([
             'akun_username' => 'nullable',
             'akun_email'    => 'nullable',
             'akun_password' => 'nullable',
         ]);

         $order->akun()->create($validateWebAkun);
         $order->website()->create([
             'domain' => $request->input('domain'),
             'tanggal_order' => $request->input('tanggal_order'),
         ]);
         $order->transaksi()->create([
             'quantity' => $request->input('quantity'),
             'biaya' => $request->input('biaya'),
             'paket' => $request->input('paket'),
             'total' => $request->input('total'),
         ]);
         return redirect('/orders');
        return dd($request);
    }

    // edit order by id
    public function edit($id) {
        $edit = Orders::where('order_id', $id)->first();
        $edit = Orders::where('orders.order_id', $id)
                    ->leftJoin('web_akuns', 'orders.order_id', 'web_akuns.order_id')
                    ->leftjoin('websites', 'orders.order_id', 'websites.order_id')
                    ->leftjoin('transaksi', 'orders.transaksi_id', 'transaksi.transaksi_id')
                    ->first();

        return view('backend.pages.edit-order', compact('edit'));
    }

    public function update(Request $request, $id) {
        $validateOrder = $request->validate([
            'nama'    => 'required|max: 191',
            'brand'    => 'required',
            'data_logo'     => 'required',
            'data_website'  => 'required',
            'tipe_post'     => 'required',
            'target'        => 'required',
            'warna'         => 'nullable',
            'akun_username' => 'nullable',
            'akun_email'    => 'nullable',
            'akun_password' => 'nullable',
            'deadline'      => 'nullable',
            'request'       => 'nullable',

            'dp'   => 'nullable',
            'renewal'   => 'nullable',

        ]);

        $updateOrder = Orders::where('orders.order_id', $id)
                        ->join('web_akuns', 'orders.order_id', 'web_akuns.order_id')
                        ->join('transaksi', 'orders.transaksi_id', 'transaksi.transaksi_id')
                        ->update($validateOrder);
        $updateDomain = Website::where('order_id', $id)->update([
            'domain' => $request->input('domain'),
            'tanggal_order' => $request->input('tanggal_order'),
        ]);

        if ($updateDomain == null) {
            $createDomain = Website::create([
                'domain' => $request->input('domain'),
                'tanggal_order' => $request->input('tanggal_order'),
                'order_id' => $id,
            ]);
        }

        return redirect('/orders');
    }

    public function delete(Request $request, $id) {
        $delete = Orders::where('order_id', $id)->update(['deleting' => true]);
        $deleteProgress = ProgressList::where('order_id', $id)->delete();

        return response()->json($delete);
    }

    public function editNotes(Request $request, $id) {
        $user = $request->user();
        $order = Orders::where('order_id', $id)->first();

        $insertNotes = Orders::where('order_id', $id)->update(['notes' => $request->input('notes')]);
        if($insertNotes) {
            $users = User::all();
            Notification::send($users, new addedNotes($user, $order));

            $response['ping'] = 200;
        } else {
            $response['ping'] = 500;
        }

        return json_encode($response);
    }
    public function editRequest(Request $request, $id) {
        $user = $request->user();
        $order = Orders::where('order_id', $id)->first();

        $insertRequest = Orders::where('order_id', $id)->update(['request' => $request->input('request')]);
        if($insertRequest) {
            $users = User::all();
            Notification::send($users, new addedRequest($user, $order));

            $response['ping'] = 200;
        } else {
            $response['ping'] = 500;
        }

        return json_encode($response);
    }

    public function viewNotes($id) {
        $viewNotes = Orders::where('order_id', $id)->get();

        return response()->json($viewNotes);
    }
    public function viewRequest($id) {
        $viewRequest = Orders::where('order_id', $id)->get();

        return response()->json($viewRequest);
    }

    public function addOrder(){

    }
    public function addOrderPost(){

    }
}
