<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdsCampaign;
use App\AdsAkun;

class CampaignController extends Controller
{
    public function index() {
        // get all campaign
        $listCampaign = AdsCampaign::orderBy('adsakun_id')
                        ->get()->groupBy(function ($item) {
                            return $item->adsakun_id;
        });

        return view('backend.pages.list-campaign', compact('listCampaign'));
    }

    public function show() {
        $listAkun = AdsAkun::all();

        return view('backend.pages.add-campaign', compact('listAkun'));
    }

    public function store(Request $request) {
        $validateCampaign = $request->validate([
            'saldo' => 'integer',
        ]);

        $storeCampaign = AdsCampaign::create([
            'adsakun_id'    => $request->akun_adwords,
            'nama_customer' => $request->nama,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'saldo_adwords' => $validateCampaign['saldo'],
            'notes'         => $request->catatan,
        ]);

        return redirect(route('listCampaign'));
    }

    public function edit($id) {
        $listAkun = AdsAkun::all();
        $edit = AdsCampaign::where('adscampaign_id', $id)->first();

        return view('backend.pages.edit-campaign', compact('listAkun', 'edit'));
    }

    public function update(Request $request, $id) {
        $updateCampaign = AdsCampaign::where('adscampaign_id', $id)
                    ->update([
                        'adsakun_id' => $request->akun_adwords,
                        'nama_customer' => $request->nama,
                        'tanggal_mulai' => $request->tanggal_mulai,
                        'tanggal_akhir' => $request->tanggal_akhir,
                        'saldo_adwords' => $request->saldo,
                        'notes' => $request->catatan,
                    ]);
        
        return redirect(route('listCampaign'));
    }

    public function delete($id) {
        $delete = AdsCampaign::find($id)->delete();

        return redirect('/adwords/campaigns');
    }
}
