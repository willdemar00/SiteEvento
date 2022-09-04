<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function evento(){
        return view("events.Eventos");
    }
    public function criar(){
        return view("events.criarEvento");
    }
}
