@extends('simple')
@section('content')

    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Relatório de estagiário</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h5 style="color: #013d52;" class="mb-4">Estagiário(s): {{ $countTreinee }}</h5>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-info btn-sm" title="Imprimir documento" onclick="window.print()"><i class="fas fa-print"></i> Imprimir</button>
            </div>
        </div>

        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Educação escolar</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Data de criação</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                    @foreach ($listTreinee as $treinee)
                        <tr>
                            <th scope="row">{{$treinee->id}}</th>
                            <td>{{$treinee->name}}</td>
                            <td>{{$treinee->school_education}}</td>
                            <td>{{$treinee->phone}}</td>
                            <td>{{$treinee->email}}</td>
                            <td>{{$treinee->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </tbody>
        </table>
    </div>

@endsection
