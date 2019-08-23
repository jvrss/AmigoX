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
                                <th scope="row"><a href="#">{{$group->id}}</th>
                                <td>{{$group->name}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('group.show', ['id'=>$group->id]) }}">
                                        Vis
                                    </a>
                                    <a class="btn btn-primary" href="{{ route('group.edit', ['id'=>$group->id]) }}">
                                        Edi
                                    </a>
                                    <a class="btn btn-primary" href="{{ route('group.destroy', ['id'=>$group->id]) }}">
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

