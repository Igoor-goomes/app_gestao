<h1>Fornecedores</h1>

{{--Isto é um comentário na sintaxe do blade--}}

@php
    /*
    if(<!condição>){} //enquanto executa se o retorno for true
    */
@endphp
{{--@unless executa se o retorno for false--}}

Nome do Fornecedor: {{$fornecedores [1]['nome']}}
<br>
Status do Fornecedor: {{$fornecedores [1]['status']}}
<br>
<br>
@unless($fornecedores[1]['status']=='Ativo')
    Fornecedor Inativado
@endunless



