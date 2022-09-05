<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventoMD;

class EventController extends Controller
{
    public function index(){
        
        return view('welcome');
    }

    public function evento(){
        $events=EventoMD::all();
        return view("events.Eventos",['events'=>$events]);
    }
    public function criar(){
        return view("events.criarEvento");
    }
}
