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
    Nome do Fornecedor: {{$fornecedores [0]['nome']}}
    <br>
    Status do Fornecedor: {{$fornecedores [0]['status']}}
    <br>
    CNPJ do Fornecedor: {{$fornecedores[0]['cnpj']}}
    <br>
    Telefone do Fornecedor: ({{$fornecedores[0]['ddd'] ?? ''}}) {{$fornecedores[0]['telefone'] ?? ''}}
    @switch($fornecedores[0]['ddd'])
        @case('61')
            /Brasilia - DF
            @break
        @case('62')
            /Goiania - GO
            @break
        @case('32')
            /Boa Esperança - MG
            @break
        @default
            Estado não identificado
    @endswitch
@endisset





