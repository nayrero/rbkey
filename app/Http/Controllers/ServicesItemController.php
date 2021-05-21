<?php

namespace App\Http\Controllers;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ServicesItemController extends Controller
{
    public function service_item() {
        $service = service::all();     

        return $service;
    }
    
}
