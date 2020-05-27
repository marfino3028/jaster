<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use App\Orders;
use App\Hosting;

class WebsiteController extends Controller
{
    public function index() {
        // get all campaign
        $listweb = Website::orderBy('hostingId', 'desc')
                        ->whereNotNull('hostingId')
                        ->get()->groupBy(function ($item) {
                            return $item->hostingId;
        })->toArray();

        $listwebnoHost = Website::where('hostingId', null)->get()->toArray();

        $listHosting = Hosting::where('deleting', 0)->get();
        $arrayHosting = $listHosting->toArray();

        $listOrder = Orders::select('order_id', 'brand')->get();

        return view('backend.pages.list-website', compact('listweb', 'listOrder', 'listHosting', 'arrayHosting', 'listwebnoHost'));
    }

    public function show($id) {
        $data = Website::where('websiteId', $id);

        if($data) {
            if($data->count() > 0) {
                $response = [
                    'code'    => 200,
                    'status'  => 'Success!',
                    'message' => 'Data found!',
                    'result'  => $data->first()
                ];
            } else {
                $response = [
                    'code'    => 404,
                    'status'  => 'Success!',
                    'message' => 'Data not found!'
                ];
            }
        } else {
            $response = [
                'code'    => 500,
                'status'  => 'Failed!',
                'message' => 'Error!'
            ];
        }

        return response()->json($response);
    }

    public function create(Request $request) {
        $create = Website::create([
            'hostingId' => $request->input('nama_hosting'),
            'order_id'  => $request->input('brand'),
            'domain'    => $request->input('nama_domain'),
            'tanggal_order'   => $request->input('tanggal_order'),
        ]);

        if ($create) {
            return redirect('/domain');
        }
    }

    public function update(Request $request, $id) {
        $update = Website::where('websiteId', $id)->update([
            'hostingId' => $request->input('nama_hosting'),
            'order_id'  => $request->input('brand'),
            'domain'    => $request->input('nama_domain'),
            'tanggal_order'   => $request->input('tanggal_order'),
        ]);

        if ($update) {
            return redirect('/domain');
        }
    }

    public function delete($id) {
        $delete = Website::where('websiteId', $id)->delete();

        if($delete) {
            return redirect('/domain');
        }
    }
}
