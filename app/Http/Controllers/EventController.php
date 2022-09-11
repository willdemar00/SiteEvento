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
    public function store(Request $request){
        $events= new EventoMD;

        $events->titulo= $request->titulo;
        $events->cidade= $request->cidade;
        $events->privado= $request->privado;
        $events->descricao= $request->descricao;
        $events->itens=$request->itens;
        

        //Imagem upload
        if($request->hasFile("imagem")&& $request->file('imagem')-> isValid()){
            $requestImagem=$request->imagem;

            $extension= $requestImagem->extension();
            

            $imagemNome= md5($requestImagem->getClientOriginalName().strtotime("now")).".".  $extension;

            $requestImagem->move(public_path('img/events'),$imagemNome);

            $events->imagem=$imagemNome;


        }
        
        $events-> save();

        return redirect('/eventos')->with('msg','Evento Criado com sucesso');
    }

    public function show($id){
         $events=EventoMD::findOrfail($id);
         return view('events.show',['events'=>$events]);
    }



}
