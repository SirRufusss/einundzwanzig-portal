<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait LNBitsTrait
{
    public function createInvoice($sats, $memo)
    {
        $lnbits = auth()->user()->lnbits;

        $response = Http::withHeaders([
            'X-Api-Key' => $lnbits['read_key'],
        ])
            ->post($lnbits['url'].'/api/v1/payments', [
                'out'    => false,
                'amount' => $sats,
                'memo'   => $memo,
            ]);

        return $response->json();
    }

    public function check($paymentHash)
    {
        $lnbits = auth()->user()->lnbits;

        $response = Http::withHeaders([
            'X-Api-Key' => $lnbits['read_key'],
        ])
                        ->get($lnbits['url'].'/api/v1/payments/' . $paymentHash);

        return $response->json();
    }
}