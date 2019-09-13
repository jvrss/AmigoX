@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @include('layouts.menu')

        <div class="col-md-9">
            @if(Session::has('message'))
            <div class="alert alert-warning mb-3 mt-3" style="max-width: 85%; margin: 0 auto;" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif
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
                                <th scope="row"><a href="{{ route('session.show', ['id'=>$session->id]) }}">{{$session->id}}</th>
                                <td>{{$session->name}}</td>
                                <td class="row">
                                    <a class="btn btn-primary mr-1" href="{{ route('session.show', ['id'=>$session->id]) }}">
                                        Vis
                                    </a>
                                    <button class="btn btn-primary mr-1" onclick="window.location.href ='{{ route('session.edit', ['id'=>$session->id]) }}';" @if($session->sorted) disabled @endif>
                                            Edi
                                </button>
                                <form    action="{{ route('session.update', ['id'=>$session->id]) }}" method="POST">
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

