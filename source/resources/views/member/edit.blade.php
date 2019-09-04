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
                            Membros
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $k=>$user)
                            <tr>
                                <th scope="row">{{$user->name}}</th>
                                <td class="row">
                                    <a class="btn btn-primary mr-1" href="{{ route('member.show', ['id'=>$user->id]) }}">
                                        Vis
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="form-group row ">
                        <div class="col-6 text-right">
                            <a class="btn btn-primary" href="{{ route('group.show', ['id'=> $group->id]) }}">
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

