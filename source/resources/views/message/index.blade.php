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
                            Mensagens
                        </div>
                        <div class='col-md-1'>
                            <button class="btn btn-primary">+</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Mensagens</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">asd</th>
                                <td>Mark</td>
                            </tr>
                            <tr>
                                <th scope="row">asd</th>
                                <td>Jacob</td>
                            </tr>
                            <tr>
                                <th scope="row">asd</th>
                                <td>Larry the Bird</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

