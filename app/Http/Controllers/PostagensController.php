<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Anexos;
use App\Models\Postagens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;


class PostagensController extends Controller
{
  public function inserirPostagem(Request $request)
  {    
    //realizando upload da imagem
    if ($request->hasFile('arquivo')) 
    {
      $nomeExtensao = $request->file('arquivo')->getClientOriginalName();
      $nomeArq = pathinfo($nomeExtensao, PATHINFO_FILENAME);
      $extensao = $request->file('arquivo')->getClientOriginalExtension();
      $novoNome = $nomeArq . '_' . time() . '.' . $extensao;
      $path = $request->file('arquivo')->storeAs('Editais', $novoNome);
    } 
    else 
    {
      $novoNome = 'Sem imagem.png';
    }

    $id = Auth::User()->id;
      $data = [
      'nome'            => $request->nome,
      'etapa'           => $request->etapa,
      'valor'           => $request->valor,
      'email'           => $request->email,
      'telefone'        => $request->telefone,
      'categoria'       => $request->categoria,
      'flag'            => $request->flag,
      'arquivo'         => $novoNome,
      'id_user_create'  => $id,
      'id_user_up'      => $id,
      'id_user_disable' => $id
    ];

    if ($data) 
    {
      $postg = Postagens::create($data);
      //aqui definimos o array fora do escopo do for, para que ele fique disponível para o insert
      $anexoData = [];      
      //e nesse for basicamente percorremos todas as posições do que vier do formulário na posição de texto (poderia ser link tbm)
      // e o array declarado acima é populado, a cada passo do for em cada posição adicionada no form.
      for ($i = 0; $i < count($request['texto']); $i++) 
      {
        $anexoData[] = [
          'link' => $request['link'][$i],
          'texto' => $request['texto'][$i],
          'id_postagens' => $postg->id,
        ];
      }
      //com o try e catch, utilizando o template com insert conseguimos inserir todos os itens contidos no array que foi populado dentro do for
      //daria pra fazer de outra forma, mas acho essa mais limpa, e caso dê erro cai no catch, ao invés do else
      try 
      {
        DB::table('anexos')->insert($anexoData);
        $request->session()->flash(
          'Mensagem',
          "Edital inserido com sucesso!"
        );
        return redirect('/listagem')->with('msg', 'Postagem inserida com sucesso.');
      } 
      catch (\Exception $e) 
      {
        $request->session()->flash(
          'Mensagem',
          "Edital não inserido." . $e
        );
      }      
    }    
  }
  //listagem para pagina inicial dos editais
  public function listagemEditais()
  {
    $postagem = Postagens::orderBy('id', 'desc')
    -> simplePaginate(16);
    return view('editais', compact('postagem'));
  }
  //listagem para pagina do admin
  public function listagem()
  {
    $postagem = Postagens::orderBy('id', 'desc')
    ->where('flag', 'Ativado')
    ->simplePaginate(16);

    return view('listagem', compact('postagem'));
  }

  public function editaisDesativados()
  {
    $desativados = Postagens::orderBy('created_at', 'desc')
    ->where('flag', 'Desativado')
    ->simplePaginate(10);
    return view('/desativados', compact('desativados'));      
  }

  public function paginaSimples($id)
  {
    if(!$post = Postagens::find($id))
    {
      return redirect()->back();
    }
    $anexos = DB::table('anexos')
    ->where('id_postagens',$id)
    ->from('anexos')->get();
    return view('/single', compact('post', 'anexos'));  
  }

  public function desativarEdital($id)
  {
    if(!$post = Postagens::find($id))
    {
      return redirect()->back();
    }
    $id_disable = Auth::User()->id;
    Postagens::where('id', $id)
    ->update(['flag' =>  'Desativado', 'id_user_disable'=>$id_disable]);
    return redirect()->back()->with('msg', 'Edital desativado com sucesso.');
  }

  public function ativarEdital($id)
  {
    if(!$post = Postagens::find($id))
    {
      return redirect()->back();
    }
    $id_user = Auth::User()->id;
    Postagens::where('id', $id)
    ->update(['flag' =>  'Ativado', 'id_user_create'=>$id_user]);
    return redirect()->back()->with('msg', 'Edital reativado com sucesso.');;
  }

  public function getDados($id)
  {
    if(!$post = Postagens::find($id))
    {
      return redirect()->back();
    }
    $atual = Postagens::find($id);
    return view('/atualizacao',compact('atual'));
  }

  public function alterar(Request $request, $id)
  {
    $postagem = Postagens::FindOrFail($id);
    $imagemAtual = $postagem->arquivo;
    //dd($imagemAtual);
    //Storage::disk('public')->delete($imagemAtual);
    if ($request->hasFile('arquivo')) 
    {
      Storage::disk('public')->delete('Editais/'.$imagemAtual);
      $nomeExtensao = $request->file('arquivo')->getClientOriginalName();
      $nomeArq = pathinfo($nomeExtensao, PATHINFO_FILENAME);
      $extensao = $request->file('arquivo')->getClientOriginalExtension();
      $novoNome = $nomeArq . '_' . time() . '.' . $extensao;
      $path = $request->file('arquivo')->storeAs('Editais', $novoNome);
    } 
    else 
    {
      $novoNome = $postagem->arquivo;
    }

    $id = Auth::User()->id;
    $postagem->update([
      'nome'        => $request->nome,
      'etapa'       => $request->etapa,
      'valor'       => $request->valor,
      'email'       => $request->email,
      'telefone'    => $request->telefone,
      'categoria'   => $request->categoria,
      'flag'        => $request->flag,
      'arquivo'     => $novoNome,
      'id_user_up'  => $id
    ]);
    return redirect('/listagem')->with('msg', 'Edital '.'" ' .$request->nome.' "'.' alterado com sucesso.');
  }

  public function buscar(Request $request)
  {
    $posts = Postagens::where('nome', 'LIKE', "%{$request->name}%")
    ->where('flag', 'ativado')
    ->simplePaginate(10);
    
    return view('listagem', compact('posts'));
  }

  public function buscarDesativados(Request $request)
  {
    $posts = Postagens::where('nome', 'LIKE', "%{$request->name}%")
    ->where('flag', 'desativado')
    ->simplePaginate(10);
    
    return view('listagem', compact('posts'));
  }
}    


