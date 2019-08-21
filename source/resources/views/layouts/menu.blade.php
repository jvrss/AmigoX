<div class="col-md-3 mb-3">
    <div class="card">
        <div class="card-header">Menu</div>

        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th scope="row">
                            <a class="btn btn-link" href="{{ url('/sessions') }}">
                                {{ __('Sessões') }}
                            </a>
                        </th>

                    </tr>
                    <tr>
                        <th scope="row">
                            <a class="btn btn-link" href="{{ url('/groups') }}">
                                {{ __('Grupos') }}
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th scope="row">
                            <a class="btn btn-link" href="{{ url('/gifts') }}">
                                {{ __('Comprar Presentes') }}
                            </a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>