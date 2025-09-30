<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\models\Inscricoes;

class InscricaoController extends Controller
{
    /**
     * puxa os dados salvos com base na Model Inscricoes
     */
    public function index() {
      $inscricoes = Inscricoes::All()->where('status', '=', 'Confirmado');

      $inscritos_por_evento = new Collection();
      $eventos_list = Inscricoes::All();
      $eventos = Inscricoes::All()->pluck("evento");
      foreach($eventos as $evento){
        $inscritos_por_evento->put($evento, $eventos_list->where('evento', '=', $evento)->count());
      }
      return view('home', compact('inscricoes', 'inscritos_por_evento'));
    }

    public function confirmar() {
      $inscricoes = Inscricoes::All()->where('status', '!=', 'Confirmado');
      return view('eventos.confirmar', compact('inscricoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('eventos.inscricao');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inscricao = new Inscricoes();

        $inscricao->nome = $request->nome;
        $inscricao->evento = $request->evento;
        $inscricao->data_evento = now();
        $inscricao->status = $request->status;
        $inscricao->save();

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inscricao = Inscricoes::find($id);
        return view('eventos.editar', compact('inscricao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Inscricoes::find($id)->update([
            'nome' => $request->nome,
            'evento' => $request->evento,
            'data_evento' => $request->data_evento,
            'status' => $request->status,

        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Inscricoes::find($id)->delete();

        return redirect('/');
    }
}
