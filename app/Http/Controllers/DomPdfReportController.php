<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DomPdfReportController extends Controller
{

    public function download(Request $request)
    {
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];

        $pdf = Pdf::loadView('reports.invoice', ['data' => $data]);

        return $pdf->download();
    }
}
