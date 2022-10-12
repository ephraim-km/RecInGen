<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use PDF;

class PDFController extends Controller
{
    
    /**
     * Display invoice
     */
    public function invoice(){

        return view('invoice');
        
    }
    
    /**
     * 
     */
    public function invoice_download(){

        $pdf = PDF::loadView('invoice')->setOptions(['defaultFont' => 'sans-serif']);

        // dd($pdf->output());

        return $pdf->download('Invoice.pdf');
        
    }

}