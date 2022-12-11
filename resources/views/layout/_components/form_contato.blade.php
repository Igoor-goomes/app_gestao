{{$slot}}
<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        <input name="nome" value="{{ old('nome') }}" type="text" class="form-control" placeholder="Nome completo">
            @if($errors->has('nome'))
                <span class="help-block" style="color:#FF1A1A">{{ $errors->first('nome') }}</span>
            @endif
    </div>
    <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
        <input name="telefone" value="{{ old('telefone') }}" type="text" class="form-control" placeholder="Telefone para contato">
            @if($errors->has('telefone'))
                <span class="help-block" style="color:#FF1A1A">{{ $errors->first('telefone') }}</span>
            @endif
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input name="email" value="{{ old('email') }}" type="text" class="form-control" placeholder="E-mail para contato">
            @if($errors->has('email'))
                <span class="help-block" style="color:#FF1A1A">{{ $errors->first('email') }}</span>
            @endif
    </div>
    <div class="form-group{{ $errors->has('motivo_contatos_id') ? ' has-error' : '' }}">
        <select name="motivo_contatos_id" class="form-control">
            <option value="">Qual o motivo do contato?</option>
    
            @foreach ( $motivo_contatos as $key => $motivo_contato)
                <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>            
            @endforeach
        </select>
        <span class="help-block" style="color:#FF1A1A">{{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}</span>
    </div>
    <div class="form-group{{ $errors->has('mensagem') ? ' has-error' : '' }}">
        <textarea name="mensagem" class="form-control" placeholder="Mensagem...">{{(old('mensagem') != '') ? old('mensagem') : ''}}</textarea>
        <span class="help-block" style="color:#FF1A1A">{{ $errors->has('mensagem') ? $errors->first('mensagem') : ''}}</span>
        
    </div>

    <br>
    <button type="submit" class="btn btn-primary btn-lg btn-success">Enviar</button>
</form>
{{-- Tratamento de erros --}}
{{-- @if ($errors->any())
    <div style="position:absolute; top:0px; left:0px; width:100%; background:red; color: white">
        
        @foreach ($errors->all() as $erro)
            {{$erro}}
            <br>
        @endforeach

    </div>
@endif --}}