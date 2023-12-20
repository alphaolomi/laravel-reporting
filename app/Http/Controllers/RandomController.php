<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

// RandomController
class RandomController extends Controller
{
    public function simple()
    {
        $customer = new Buyer([
            'name'          => 'Juma Rashidi',
            'custom_fields' => [
                'email' => 'test@example.com',
            ],
        ]);

        $item = InvoiceItem::make('Service 1')->pricePerUnit(2);

        $invoice = Invoice::make()
            ->buyer($customer)
            // ->discountByPercent(10)
            // ->taxRate(15)
            // ->shipping(1.99)
            ->addItem($item);

        return $invoice->stream();
    }
}
