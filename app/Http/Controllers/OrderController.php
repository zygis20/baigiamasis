<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Lake;
use App\Models\Ticket;

class OrderController extends Controller
{
    public function buy(Request $request)
    {
        $ticket = Ticket ::query() -> where('id', $request -> get('ticket_id')) -> first();
        if ($ticket) {


            $order = new Order();
            $order->ticket_id = $request -> get('ticket_id');
            $order->price = ($ticket->hooks * 1) + ($ticket->fishing_rods * 2);
            $order->status = Order::STATUS_PENDING;
            $order->save();

            dd('Generuojamas mokejimas');

        }
    }

//    public function purchase(Request $request)
//    {
//        $validatedData = Validator ::make($request -> all(), Ticket::VALIDATION);
//
//        if ($validatedData -> fails() == true) {
//            return new JsonResponse($validatedData -> errors());
//        } else {
////            $ticket = new Ticket();
////            $ticket->first_name = 'zygis';
////            $ticket->save();
//
//            $data = $validatedData -> validated();
//            $data['lake'] = json_encode($data['lake']);
//            $data['created_at'] = date("Y-m-d H:i:s");
//
//
//
//            Ticket ::query() -> insert($data);
//        }
//    }


}
