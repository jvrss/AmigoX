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
                                    <a class="btn btn-primary mr-2" href="{{ route('member.show', ['id'=>$user->id]) }}">
                                        Vis
                                    </a>
                                    @if ($group->users->contains($user->id))
                                    <form action="{{ route('member.destroy', ['id' => -1]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="group_id" value="{{$group->id}}">
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Rem') }}
                                        </button>
                                    </form>
                                    @else
                                    <form method="POST" action="{{ route('member.store') }}">
                                        @csrf
                                        <input type="hidden" name="group_id" value="{{$group->id}}">
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Add') }}
                                        </button>
                                    </form>
                                    @endif
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

