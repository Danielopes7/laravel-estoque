<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Models\Produto;
use App\Http\Requests\ProdutosRequest;

;

class ProdutoController extends Controller{

    public function lista(){

        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
        $produto = Produto::find($id);

        if(empty($produto)) {
            return "Esse produto não existe";
            }
            
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo(){
        return view('produto.formulario');
        }

    public function adiciona(ProdutosRequest $request){
        // pegar dados do formulario
        // salvar no banco de dados
        // retornar alguma view            
        Produto::create($request->all());

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));


    }
    public function listaJson(){
        $produtos = Produto::all(); 
        return response()->json($produtos);
        }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()
                ->action('ProdutoController@lista');

        }
    

}