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
                    <div class="form-group mb-4">
                        <label for="exampleFormControlInput1">Nome:</label>
                        <input value="{{$group->name}}" type="text" class="form-control" disabled >
                    </div>
                    <div class="form-group row ">
                        <div class="col-6 ml-1 row" >
                            <a class="btn btn-primary mr-1" href="{{ route('member.edit', ['id'=> $group->id]) }}">
                                {{ __('Adicionar Membros') }}
                            </a>
                            <a class="btn btn-primary mr-1" href="{{ route('group.edit', ['id'=> $group->id]) }}">
                                {{ __('Editar') }}
                            </a>
                            <form action="{{ route('group.destroy', ['id'=> $group->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Excluir') }}
                                </button>
                            </form>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary" href="{{ url('/group') }}">
                                {{ __('Voltar') }}
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">{{$group->users->count()}} Membro(s):</label>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($group->users as $k=>$member)
                                <tr>
                                    <th scope="row"><a href="{{ route('group.show', ['id'=>$member->id]) }}">{{$member->id}}</th>
                                    <td>{{$member->name}}</td>
                                    <td class="row">
                                        <a class="btn btn-primary mr-1" href="{{ route('user.show', ['id'=>$member->id]) }}">
                                            Vis
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

