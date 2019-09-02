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
                            Grupos
                        </div>
                        <div class='col-md-1'>
                            <a class="btn btn-primary" href="{{ url('/group/create') }}">
                                +
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groups as $k=>$group)
                            <tr>
                                <th scope="row"><a href="{{ route('group.show', ['id'=>$group->id]) }}">{{$group->id}}</th>
                                <td>{{$group->name}}</td>
                                <td class="row">
                                    <a class="btn btn-primary mr-1" href="{{ route('group.show', ['id'=>$group->id]) }}">
                                        Vis
                                    </a>
                                    <a class="btn btn-primary mr-1" href="{{ route('group.edit', ['id'=>$group->id]) }}">
                                        Edi
                                    </a>
                                    <form action="{{ route('group.update', ['id'=>$group->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Excluir') }}
                                        </button>
                                    </form>
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
@endsection

