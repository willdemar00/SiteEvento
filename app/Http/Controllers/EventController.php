<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventoMD;
use App\Models\User;

class EventController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function evento()
    {
        $buscar = request('buscar');
        if ($buscar) {
            $events = EventoMD::where([

                ['titulo', 'like', '%' .$buscar. '%']
                
                ])->get();
        } else {
        
        $events = EventoMD::all();
        }
        return view("events.Eventos", ['events' => $events, 'buscar' => $buscar]);
    }
    public function criar()
    {
        return view("events.criarEvento");
    }
    public function store(Request $request)
    {
        $events = new EventoMD;

        $events->titulo = $request->titulo;
        $events->cidade = $request->cidade;
        $events->data = $request->data;
        $events->privado = $request->privado;
        $events->descricao = $request->descricao;
        $events->itens = $request->itens;


        //Imagem upload
        if ($request->hasFile("imagem") && $request->file('imagem')->isValid()) {
            $requestImagem = $request->imagem;

            $extension = $requestImagem->extension();


            $imagemNome = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." .  $extension;

            $requestImagem->move(public_path('img/events'), $imagemNome);

            $events->imagem = $imagemNome;
        }
        $user=auth()->user();
        $events->user_id=$user->id;
       

        $events->save();

        return redirect('/eventos')->with('msg', 'Evento Criado com sucesso');
    }

    public function show($id)
    {
        $events = EventoMD::findOrfail($id);
        $donoEvento= user::where('id',$events->user_id)->first()->toArray();
        return view('events.show', ['events' => $events,'donoEvento'=>$donoEvento]);
    }
    public function dash(){
        $user=auth()->user();
        $events= $user->EventoMD;
        return view('events.dashboard',['events'=>$events]);
    }
    public function deletar($id){
        EventoMD::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg','Evento deletado com sucesso!');
    }
}
