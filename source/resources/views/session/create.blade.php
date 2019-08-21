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
                            Criar Sessão
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('session.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nome') }}:</label>                            
                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="group" class="col-md-3 col-form-label text-md-right">{{ __('Grupo') }}:</label>  
                            <div class="col-md-7">
                                <select class="form-control{{ $errors->has('group') ? ' is-invalid' : '' }}" name="group" id="group" required>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                @if ($errors->has('group'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('group') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>   

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Criar') }}
                                </button>
                                <a class="btn btn-primary" href="{{ url('/session') }}">
                                    {{ __('Voltar') }}
                                </a>
                            </div>
                        </div>
                    </form>                
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

