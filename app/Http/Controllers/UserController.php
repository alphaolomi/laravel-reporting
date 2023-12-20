<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function export()
    {
        // return Excel::download(new UsersExport, 'users_'.now()->format('Y-m-d_H-i-s').'.xlsx');
        // return Excel::download(new InvoicesExport, 'invoices.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

        return Excel::download(new UsersExport, 'users_'.now()->format('Y-m-d_H-i-s').'.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

    }
}
