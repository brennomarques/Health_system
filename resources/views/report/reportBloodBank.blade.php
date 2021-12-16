@extends('simple')
@section('content')

    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Relatório de sangue</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h5 style="color: #013d52;" class="mb-4">Banco de sangue(s): {{ $countBloodBank }}</h5>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-info btn-sm" title="Imprimir documento" onclick="window.print()"><i class="fas fa-print"></i> Imprimir</button>
            </div>
        </div>

        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Compatibilidade</th>
                    <th scope="col">Data de criação</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                    @foreach ($listBloodBank as $blood)
                        <tr>
                            <th scope="row">{{$blood->id}}</th>
                            <td>{{$blood->type}}</td>
                            <td>{{$blood->compatibility}}</td>
                            <td>{{$blood->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </tbody>
        </table>
    </div>

@endsection
