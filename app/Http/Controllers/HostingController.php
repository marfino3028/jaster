<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hosting;

class HostingController extends Controller
{
    public function index() {
        $index = Hosting::where('deleting', 0)
                            ->latest()
                            ->get();

        return view('backend.pages.list-hosting', compact('index'));
    }

    public function show($id)
    {
        $data = Hosting::where('hostingId', $id);

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
        $create = Hosting::create([
                    'nama_hosting'     => $request->input('nama_hosting'),
                    'username_hosting' => $request->input('username_hosting'),
                    'password_hosting' => $request->input('password_hosting'),
        ]);

        if ($create) {
            return redirect('/hosting');
        }
    }

    public function update(Request $request, $id) {
        $update = Hosting::where('hostingId', $id)->update([
            'nama_hosting'     => $request->input('nama_hosting'),
            'username_hosting' => $request->input('username_hosting'),
            'password_hosting' => $request->input('password_hosting'),
        ]);

        if ($update) {
            return redirect('/hosting');
        }
    }

    public function delete($id) {
        $delete = Hosting::where('hostingId', $id)->update([
            'deleting' => true,
        ]);

        if($delete) {
            return redirect('/hosting');
        }
    }
}
