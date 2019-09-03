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
                            Grupo
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome:</label>
                        <input value="{{$group->name}}" type="text" class="form-control" disabled >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Membros:</label>
                        <input value="{{$members}}" type="text" class="form-control" disabled >
                    </div>
                    <div class="form-group row ">
                        <form class="col-6" action="{{ route('group.destroy', ['id'=> $group->id]) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('member.index', ['group_id'=> $group->id]) }}">
                                {{ __('Adicionar Membros') }}
                            </a>
                            <a class="btn btn-primary" href="{{ route('group.edit', ['id'=> $group->id]) }}">
                                {{ __('Editar') }}
                            </a>
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Excluir') }}
                            </button>
                        </form>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary" href="{{ url('/group') }}">
                                {{ __('Voltar') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

