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
                            Sessões
                        </div>
                        <div class='col-md-1'>
                            <a class="btn btn-primary" href="{{ url('/session/create') }}">
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
                            @foreach ($sessions as $k=>$session)
                            <tr>
                                <th scope="row">{{$session->id}}</th>
                                <td>{{$session->name}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('session.show', ['id'=>$session->id]) }}">
                                        Vis
                                    </a>
                                    <a class="btn btn-primary" href="{{ route('session.edit', ['id'=>$session->id]) }}">
                                        Edi
                                    </a>
                                    <a class="btn btn-primary" href="{{ route('session.destroy', ['id'=>$session->id]) }}">
                                        Rem
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
@endsection

