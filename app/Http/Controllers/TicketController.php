<?php

namespace App\Http\Controllers;

use App\Models\Lake;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index()
    {
        if (Auth ::check()) {
            return new JsonResponse(Ticket ::query() -> get());
        } else {
            dd('negalima');
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|JsonResponse
     */
    public function show(int $id)
    {
        $ticket = Ticket ::query() -> where('id', $id) -> first();
        if ($ticket) {
            return view('ticket.show', compact('ticket'));


        } else {
            return new JsonResponse('Ticket not found', 404);
        }
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $ticket = Ticket ::query() -> where('id', $id) -> first();
        if ($ticket) {
            $ticket -> delete();
            return new JsonResponse('Ticked deleted');
        } else {
            return new JsonResponse('Ticket not found', 404);
        }
    }

    /**
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update(int $id, Request $request): JsonResponse
    {
        $ticket = Ticket ::query() -> where('id', $id) -> first();
        if ($ticket) {
            $ticket -> fishing_rods = $request -> get('fishing_rods');
            $ticket -> save();

            return new JsonResponse('Ticked updated');
        } else {
            return new JsonResponse('Ticket not found', 404);
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $validatedData = Validator ::make($request -> all(), Ticket::VALIDATION);

        if ($validatedData -> fails() == true) {
            return new JsonResponse($validatedData -> errors());
        } else {
            $data = $validatedData -> validated();
            $data['lake'] = json_encode($data['lake']);
            $data['created_at'] = date("Y-m-d H:i:s");
            Ticket ::query() -> insert($data);


            return new JsonResponse('Bilietas uzsakytas, Generuojamas mokejimas');
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('ticket.create', [
            'lakes' => Lake ::all()
        ]);
    }


    public function edit()
    {
        dd('ticket redagavimas');
    }
}

