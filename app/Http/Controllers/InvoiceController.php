<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreInvoiceRequest;
use App\Models\Invoice;
use App\Models\User;


class InvoiceController extends Controller
{
    public function create()
    {
        $users = User::pluck('name', 'id');
        $invoiceSeries = config('invoiceSettings.availableInvoiceSeries');

        return view('invoices.create', [
            'users' => $users,
            'invoiceSeries' => $invoiceSeries,
        ]);
    }
}
