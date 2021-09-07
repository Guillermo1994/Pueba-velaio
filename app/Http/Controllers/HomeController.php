<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use App\Models\Dato;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datos = Dato::all();
        // $usuarios = Http::get('https://jsonplaceholder.typicode.com/users');
        // $userArray = $usuarios->json();
        return view('home',compact('datos'));
    }

    public function editar($id){
        $datos = Dato::findOrFail($id);
        return view('editar',compact('datos'));
    }

    public function modificar($id,Request $request){
        $datos = Dato::FindOrFail($id);
        $datos->Contact = $request->input('contact');
        $datos->DealName = $request->input('dealName');
        $datos->Amount = $request->input('amount');
        $datos->Owner = $request->input('owner');
        $datos->OwnerEmail = $request->input('ownerEmail');

        $datos->save();
        return  redirect()->route('home');
    }

public function consultaNombre(Request $request){

        $datos = Dato::where('Contact',$request->input('contact'))->get();

        // dd($datos);
        return view('consulta',compact('datos'));
    }


}
