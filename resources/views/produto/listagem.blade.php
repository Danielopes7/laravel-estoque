@extends('layout.principal')
@section('conteudo')

@if(empty($produtos))
<div>Você não tem nenhum produto cadastrado.</div>
@else
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
        @foreach ($produtos as $p)
        <tr  class="{{$p->quantidade<=1 ? 'table-danger' : '' }}">
            <td>{{ $p->nome }} </td>
            <td>{{$p->valor }} </td>
            <td>{{ $p->descricao }} </td>
            <td>{{ $p->quantidade }} </td>
            <td>
                <a href="/produtos/mostra/{{$p->id}}">
                    <span  class="btn btn-primary" href="#" role="button"> Visualizar </span>
                </a>
            </td>
        
        </tr>
        @endforeach
    </table>
    @endif
    <div class="alert alert-danger" role="alert">
    Um ou menos itens no estoque!
</div>

@stop