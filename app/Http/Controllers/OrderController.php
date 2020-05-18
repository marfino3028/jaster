<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\User;
use App\Orders;
use App\ProgressList;
use App\Website;
use App\Transaksi;
use DB;
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

            // $order= Orders::create([
            //     'nama'          => $request->input('data.nama'),
            //     'brand'         => $request->input('data.brand'),
            //     'jabatan'       => $request->input('data.jabatan'),
            //     'wa'            => $request->input('data.wa'),
            //     'alamat'        => $request->input('data.alamat'),
            //     'via'           => $request->input('data.via'),
            //     'tau_dari'      => $request->input('data.tau_dari'),
            //     'data_logo'     => $request->input('data.data_logo'),
            //     'data_website'  => $request->input('data.data_website'),
            //     'tipe_post'     => $request->input('data.tipe_post'),
            //     'target'        => $request->input('data.target'),
            //     'warna'         => $request->input('data.warna'),
            //     'deadline'      => $request->input('data.deadline'),
            //     'dp'            => $request->input('data.dp'),
            //     'renewal'       => $request->input('data.renewal'),
            //     'request'       => $request->input('data.request'),
            // ]);

            $order = new Orders;
            $order->nama = $request->input('data.nama');
            $order->brand = $request->input('data.brand');
            $order->jabatan = $request->input('data.jabatan');
            $order->wa = $request->input('data.wa');
            $order->alamat = $request->input('data.alamat');
            $order->via = $request->input('data.via');
            $order->tau_dari = $request->input('data.tau_dari');
            $order->data_logo = $request->input('data.data_logo');
            $order->data_website = $request->input('data.data_website');
            $order->tipe_post = $request->input('data.tipe_post');
            $order->target = $request->input('data.target');
            $order->warna = $request->input('data.warna');
            $order->deadline = $request->input('data.deadline');
            $order->dp = $request->input('data.dp');
            $order->renewal = $request->input('data.renewal');
            $order->request = $request->input('data.request');

            $order->save();


            $transaksi = $request->input('data.transaksi');
            // get last insert order id
            $orderId = DB::getPdo()->lastInsertId();

            if ($order) {
                foreach ($transaksi as $tr){
                    $transaksi = new Transaksi;
                    $transaksi->order_id = $orderId;
                    $transaksi->quantity =$tr['quantity'];
                    $transaksi->biaya = $tr['harga'];
                    $transaksi->paket = $tr['paket'];
                    $transaksi->total =$tr['totalItem'];

                    $transaksi->save();
            }}
            else {
                return response(500);
            }
            $order->akun()->create([
                'akun_username' => $request->input('data.akun_username'),
                'akun_email'    => $request->input('data.akun_email'),
                'akun_password' => $request->input('data.akun_password'),
            ]);

         $order->website()->create([
            'domain' => $request->input('data.domain'),
             'tanggal_order' => $request->input('data.tanggal_order'),
         ]);

            // $dataOrder = $request->input('data');
        return dd($orderId);
    }

    // edit order by id
    public function edit($id) {
        $edit = Orders::where('order_id', $id)->first();
        $edit = Orders::where('orders.order_id', $id)
                    ->leftJoin('web_akuns', 'orders.order_id', 'web_akuns.order_id')
                    ->leftjoin('websites', 'orders.order_id', 'websites.order_id')
                    ->leftjoin('transaksi', 'orders.order_id', 'transaksi.order_id')
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
            'dp'            => 'nullable',
            'renewal'       => 'nullable',

        ]);

        $updateOrder = Orders::where('orders.order_id', $id)
                        ->join('web_akuns', 'orders.order_id', 'web_akuns.order_id')
                        ->join('transaksi', 'orders.order_id', 'transaksi..order_id')
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


    public function viewNotes($id) {
        $viewNotes = Orders::where('order_id', $id)->get();

        return response()->json($viewNotes);
    }
    public function editRequest(Request $request, $id) {
        $user = $request->user();
        $order = Orders::where('order_id', $id)->first();

        $insertRequest = Orders::where('order_id', $id)->update(['notes' => $request->input('notes')]);
        if($insertRequest) {
        $users = User::all();
        Notification::send($users, new addedRequest($user, $order));

        $response['ping'] = 200;
        } else {
        $response['ping'] = 500;
        }

        return json_encode($response);
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
