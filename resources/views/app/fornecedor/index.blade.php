<h1>Fornecedores</h1>

{{--Isto é um comentário na sintaxe do blade--}}

@php
    /*
    if(empty($variavel)) {} //retorna trues se variavel estiver vazia
    Uma variável pode se considerar vazia com os seguintes valores:
    -''
    -0
    -0.0
    -'0'
    -null
    -false
    -array()
    -$var
    */
@endphp

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)
    Nome do Fornecedor: {{$fornecedor['nome']}}
    <br>
    Status do Fornecedor: {{$fornecedor['status']}}
    <br>
    CNPJ do Fornecedor: {{$fornecedor['cnpj']}}
    <br>
    Telefone do Fornecedor: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
    <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset







