@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @include('layouts.menu')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class='row'>
                        <div class='col-md-11 pt-2'>
                            Sessão
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome:</label>
                        <input value="{{$session->name}}" type="text" class="form-control" disabled >
                    </div>
                    <a class="form-group" href="{{ route('group.show', ['id'=>$session->group->id]) }}">
                        <label for="exampleFormControlInput1">Grupo:</label>
                        <input value="{{$session->group->name}}" type="text" class="form-control" disabled >
                    </a>
                    @if(Session::has('message'))
                    <div class="alert alert-warning mb-3 mt-3" style="max-width: 85%; margin: 0 auto;" role="alert">
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    <div class="form-group row mt-4">
                        <div class="col-1 mr-2">
                            <form action="{{ route('draw.store', ['id'=>$session->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary" @if($session->sorted) disabled @endif>
                                    {{ __('Sortear') }}
                                </button>
                            </form>
                        </div>
                        <div class="col-1 mr-2">
                            <button class="btn btn-primary" onclick="window.location.href='{{ route('session.edit', ['id'=>$session->id]) }}';" @if($session->sorted) disabled @endif>
                                {{ __('Editar') }}
                            </button>
                        </div>
                        <div class="col-1">
                            <form action="{{ route('session.update', ['id'=>$session->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Excluir') }}
                                </button>
                            </form>
                        </div>
                        <div class="col-7">
                        </div>
                        <div class="col-1">
                            <a class="btn btn-primary" href="{{ url('/session') }}">
                                {{ __('Voltar') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    <div class='row'>
                        <div class='col-md-11 pt-2'>
                            Resultado Sorteio
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Data do Sorteio:</label>
                        <input value="{{$draw ? $draw  : 'Não sorteado'}}" type="{{$draw ? 'date' : 'text'}}" class="form-control" disabled >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

