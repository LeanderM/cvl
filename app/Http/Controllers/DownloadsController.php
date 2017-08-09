<?php

namespace App\Http\Controllers;

class DownloadsController extends Controller
{
    public function download($fileName){
        $filePath = public_path('downloads/'.$fileName);
        return response()->download($filePath);
    }
}
