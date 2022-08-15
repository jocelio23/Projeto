<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Anexos;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnexosController extends Controller
{
  public function inserirLinks(Request $request)
  {        
    $anexoData = [];      
    for ($i = 0; $i < count($request['texto']); $i++) 
    {
      $anexoData[] = [
        'link' => $request['link'][$i],
        'texto' => $request['texto'][$i],
        'id_postagens' => $request->id,
      ];
    }
  
    try 
    {
      DB::table('anexos')->insert($anexoData);
      $request->session()->flash(
        'Mensagem',
        "Edital inserido com sucesso!"
      );

      $post = $request->id;
      return redirect('/anexo/$post');
    } catch (\Exception $e) {
      $request->session()->flash(
        'Mensagem',
        "OOOPS!" . $e
      );
    }    
  }
  
  public function exibirAnexos($id)
  {    
    $postagens = DB::table('postagens')
    ->find($id);
    /* dd($postagens); */
    $anexos = DB::table('anexos')
    ->where('id_postagens',$id)
    ->from('anexos')->get();

    return view('links', compact('anexos', 'postagens'));          
  }

  public function getAnexo($id)
  {
    $anexo = Anexos::find($id);

    return view('/anexo',compact('anexo'));
  }

  public function atualizaAnexos(Request $request, $id)
  {
    $anexo = Anexos::FindOrFail($id);
    /* dd($anexo); */
    $anexo->update([
        'link'  => $request->link,
        'texto' => $request->texto,/* 
        'id'    => $request->id */
    ]);

    return redirect('/listagem')->with('msg', 'Link atualizado com sucesso. ');
  }  

  public function apagaAnexo(request $request, $id){
    $anexo = Anexos::FindOrFail($id);

    dd($request);

    $anexo->delete();

    return redirect('/postagem')->with('msg', 'Anexo escluído com sucesso ');
  }
}