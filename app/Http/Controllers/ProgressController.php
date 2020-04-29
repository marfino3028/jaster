<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Orders;
use App\ProgressList;
use App\WebAkun;
use App\Website;

class ProgressController extends Controller
{
    // method untuk menampilkan progress list
    public function show($id) {
        $showProgress = ProgressList::where([
            ['order_id', $id],
            ['nilai', true]])->get();

        return response()->json($showProgress);
    }

    public function index() {
        // show active order
        $listProgress = Orders::where('deleting', 0)
                            ->latest()
                            ->get();
        $hasil = array();
        
        $listWebsite = Website::latest()->get()->toArray();

        foreach ($listProgress as $key) {
            $lastEdit = ProgressList::where([
                        ['order_id', $key->order_id],
                        ['nilai', 1]])
                        ->orderBy('updated_at', 'desc')
                        ->first();
                        
            $order = [
                'order_id'   => $key->order_id,
                'nama_order' => $key->nama_order,
                'domain' => null,
                'last_edit'  => $lastEdit['updated_at'],
                'presentase' => $this->hitungTotalProgress($key->order_id),
            ];
                        
            foreach($listWebsite as $w) {
                if ($w['order_id'] == $key->order_id)
                $order['domain'] = $w['domain'];
            }


            array_push($hasil, $order);
        }

        return view('backend.pages.list-progress', compact('hasil'));
    }
    // fungsi untuk menghitung presentase
    public function hitungTotalProgress($id) {
        // total semua nilai kategori
        $hasilKeseluruhan = Kategori::sum('nilai');
        // mendapatkan kategori berdasarkan ID
        $nilaiOrder = ProgressList::where([['orders.order_id', $id], ['progress_lists.nilai', 1]])
                        ->join('orders', 'progress_lists.order_id', '=', 'orders.order_id')
                        ->join('kategoris', 'progress_lists.kategori_id', '=', 'kategoris.id')
                        ->sum('kategoris.nilai');
        // hitung persen
        $persen = round((($nilaiOrder * 100) / $hasilKeseluruhan), 0);

        return $persen;
    }

    public function add($id) {
        $showKategori = Kategori::get()->toTree();
        $showOrder = Orders::where('orders.order_id', $id)
                        ->join('web_akuns', 'orders.order_id', 'web_akuns.order_id')->first();

        return view('backend.pages.add-progress', compact('showKategori', 'showOrder'));
    }

    public function addProgress(Request $request, $id) {
        $cekProgress = ProgressList::where([
            ['order_id', $id],
            ['kategori_id', $request->kategori_id]
                ])->first();

        if ($cekProgress) {
            $updateProgress = ProgressList::where([
                ['order_id', $id],
                ['kategori_id', $request->kategori_id]
                    ])->update(['nilai' => true]);
        } else {
            $addProgress = new ProgressList();
            $addProgress->order_id    = $id;
            $addProgress->kategori_id = $request->kategori_id;
            $addProgress->nilai       = true;
    
            $addProgress->save();
        }

        return response()->json(['success' => 'progress ditambahkan']);
    }

    public function drop(Request $request, $id) {
        $cekProgress = ProgressList::where([
            ['order_id', $id],
            ['kategori_id', $request->kategori_id]
                ])->first();
        
        if ($cekProgress) {
            $deleteUpProgress = ProgressList::where([
                ['order_id', $id],
                ['kategori_id', $request->kategori_id],
            ])->update(['nilai' => false]);
        }
        

        return response()->json(['success' => 'progress dihapus']);
    }
}
