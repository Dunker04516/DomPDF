<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $dompdf = new Dompdf();
        $template = view('oficio')->render();
        $dompdf->loadHtml($template);
        $dompdf->setPaper("A4", 'portrair');
        $dompdf->render();
        $output = $dompdf->output();

        file_put_contents("output.pdf", $output);
    }
}
