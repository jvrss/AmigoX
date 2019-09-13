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
                            Usuário
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group mb-4">
                        <label for="exampleFormControlInput1">Nome:</label>
                        <input value="{{$user->name}}" type="text" class="form-control" disabled >
                    </div>
                    <div class="form-group row ">
                        <div class="col-6 text-right">
                            <a class="btn btn-primary" href="
                               @if ($path == 'addMember')
                                {{route('member.edit', ['id'=> $group->id])}}
                               @else
                                {{route('group.show', ['id'=> $group->id])}}
                               @endif
                               ">
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

