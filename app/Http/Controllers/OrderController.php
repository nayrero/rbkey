<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMailer;
use Illuminate\Http\Request;
use stdClass;

class OrderController extends Controller
{
    public function order(Request $request) {
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'max:40',
            'phone' => 'required|max:16',
        ]);
        $data = new stdClass();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        //$comment = 'Это сообщение отправлено из формы обратной связи';
        $mailto = "info@rbkey.ru";
        //$message = response()->json([$request->all()]);
        Mail::to($mailto)->send(new OrderMailer($data));
        //return response()->json([$request->all()]);
        return "Ваша заявка принята, ждите звонка!";
    }
    
}
