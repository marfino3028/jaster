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
        $order = Orders::leftjoin('websites', 'orders.order_id', 'websites.order_id')
        ->orderBy('orders.created_at', 'desc')

        ->get();

        return view('backend.pages.list-order', compact('order'));
    }

    // add order function
    public function store(Request $request)
    {



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
    public function show($id)
    {

    $listTransaksi = Transaksi::where('order_id', $id)->get();
    $totalsemua = Transaksi::where('order_id', $id)->sum('total');

    $ar_order = Orders::where('orders.order_id', $id)
                ->leftJoin('web_akuns', 'orders.order_id', 'web_akuns.order_id')
                ->leftjoin('websites', 'orders.order_id', 'websites.order_id')
                ->leftjoin('transaksi', 'orders.order_id', 'transaksi.order_id')
                ->get();

                return view('backend.pages.view-order', compact('ar_order', 'listTransaksi','totalsemua'));

            }

    // edit order by id
    public function edit($id) {

        $edit = Orders::where('orders.order_id', $id)
                    ->leftJoin('web_akuns', 'orders.order_id', 'web_akuns.order_id')
                    ->leftjoin('websites', 'orders.order_id', 'websites.order_id')
                    ->leftjoin('transaksi', 'orders.order_id', 'transaksi.order_id')
                    ->first();
        $listTransaksi = Transaksi::where('order_id', $id)->get();
        $totalsemua = Transaksi::where('order_id', $id)->sum('total');
        $jumlah = Transaksi::where('order_id', $id)->count('transaksi_id');
        return view('backend.pages.edit-order', compact('edit', 'listTransaksi','jumlah','totalsemua'));
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


        $nengDB = Transaksi::where('order_id',$request->input("order_id"))->get();
        foreach ($nengDB as $row) {
            $deleted = true;
            foreach ($request->input("transaksi_id") as $rows) {
                if($row->transaksi_id == $rows) {

                    $deleted = false;
                }
            }
            if($deleted) {
                Transaksi::where('transaksi_id', $row->transaksi_id)->delete();
            }
        }


        for ($i=0; $i < count($request->input("quantity")); $i++) {

            $dataTransaksi = [
                'order_id' => $request->input('order_id'),
                'quantity' => $request->input('quantity')[$i],
                'biaya' => $request->input('biaya')[$i],
                'paket' => $request->input('paket')[$i],
                'total' => $request->input('biaya')[$i] * $request->input('quantity')[$i],
            ];

            if($request->input("transaksi_id")[$i] === "null") {
                Transaksi::create($dataTransaksi);
            } else {
                Transaksi::where('transaksi_id',$request->input("transaksi_id")[$i])->update($dataTransaksi);
            }

        }




        dd($nengDB);
        die;

        $updateOrder = Orders::where('orders.order_id', $id)
                        ->join('web_akuns', 'orders.order_id', 'web_akuns.order_id')
                        ->join('transaksi', 'orders.order_id', 'transaksi.order_id')
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
        $listTransaksi = Transaksi::where('order_id', $id)->get();
        $totalsemua = Transaksi::where('order_id', $id)->sum('total');
        $jumlah = Transaksi::where('order_id', $id)->count('transaksi_id');

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
