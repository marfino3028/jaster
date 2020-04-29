<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class DeadlineController extends Controller
{
    public function index() {
        $getDeadline = Orders::select('order_id', 'nama_order', 'created_at', 'deadline')->get();

        $listDeadline = array();

        foreach ($getDeadline as $row) {
            $hasil = array(
                'id' => $row->order_id,
                'title' => $row->nama_order,
                'start' => $row->deadline,
                // 'start' => date('Y-m-d', strtotime($row->created_at)),
                'end' => $row->deadline,
                'backgroundColor' => '#6777ef',
                'textColor' => '#fff',
            );

            array_push($listDeadline, $hasil);
        }

        return response()->json($listDeadline);
    }
}
