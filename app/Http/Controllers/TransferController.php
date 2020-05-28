<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdsAkun;
use App\AdsCampaign;
use App\AdsTransfer;
use DB;
class TransferController extends Controller
{
    public function index() {
        $listTransfer = AdsTransfer::where('transfered', false)
                        ->join('ads_campaigns', 'ads_transfers.adscampaign_id', 'ads_campaigns.adscampaign_id')
                        ->join('ads_akuns', 'ads_campaigns.adsakun_id', 'ads_akuns.adsakun_id')
                        ->get();

        return view('backend.pages.list-transfer', compact('listTransfer'));
    }

    public function show() {
        $listCampaign = AdsCampaign::select('adscampaign_id', 'nama_customer')
                        ->join('ads_akuns', 'ads_campaigns.adsakun_id', 'ads_akuns.adsakun_id')
                        ->get();

        return view('backend.pages.add-transfer', compact('listCampaign'));
    }

    public function create(Request $request) {
        $validateInput = $request->validate([
            'nama_campaign' => 'required',
            'tanggal_tf'    => 'required',
            'saldo'         => 'integer',
        ]);

        $addTransfer = AdsTransfer::create([
            'adscampaign_id'   => $validateInput['nama_campaign'],
            'tanggal_transfer' => $validateInput['tanggal_tf'],
            'saldo_transfer'   => $validateInput['saldo'],
        ]);

        return redirect(route('listTransfer'));
    }

    public function edit($id) {
        $listCampaign = AdsCampaign::all();
        $edit = AdsTransfer::where('adstransfer_id', $id)->first();

        return view('backend.pages.edit-transfer', compact('listCampaign', 'edit'));
    }

    public function update(Request $request, $id) {
        $updateTransfer = AdsTransfer::where('adstransfer_id', $id)
                            ->update([
                                'adscampaign_id' => $request->nama_campaign,
                                'tanggal_transfer' => $request->tanggal_tf,
                                'saldo_transfer' => $request->saldo,
                            ]);

        return redirect(route('listTransfer'));
    }

    public function delete(Request $request, $id) {
        $deleteTf = AdsTransfer::where('adstransfer_id', $id)
                        ->update(['transfered' => true]);

        $updateCampaign = AdsCampaign::where('adscampaign_id', $request->campaignId)
                        ->update(['saldo_adwords' => $request->saldo]);
    }
}
