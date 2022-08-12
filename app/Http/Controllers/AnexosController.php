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
    //aqui definimos o array fora do escopo do for, para que ele fique disponível para o insert
    $anexoData = [];      
    //e nesse for basicamente percorremos todas as posições do que vier do formulário na posição de texto (poderia ser link tbm)
    // e o array declarado acima é populado, a cada passo do for em cada posição adicionada no form.
    /* dd($request); */
    for ($i = 0; $i < count($request['texto']); $i++) 
    {
      $anexoData[] = [
        'link' => $request['link'][$i],
        'texto' => $request['texto'][$i],
        'id_postagens' => $request->id,
      ];
    }
    /* dd($anexoData); */
    //com o try e catch, utilizando o template com insert conseguimos inserir todos os itens contidos no array que foi populado dentro do for
    //daria pra fazer de outra forma, mas acho essa mais limpa, e caso dê erro cai no catch, ao invés do else
    try 
    {
      DB::table('anexos')->insert($anexoData);
      $request->session()->flash(
        'Mensagem',
        "Edital inserido com sucesso!"
      );
      return redirect('/listagem');
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