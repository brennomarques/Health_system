@extends('simple')
@section('content')

    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Relatório de doador</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h5 style="color: #013d52;" class="mb-4">Doador(s): {{ $countDonor }}</h5>
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
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Altura</th>
                    <th scope="col">Fumante</th>
                    <th scope="col">Doença</th>
                    <th scope="col">Observação</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                    @foreach ($listDonor as $donor)
                        <tr>
                            <th scope="row">{{$donor->id}}</th>
                            <td>{{$donor->name}}</td>
                            <td>{{$donor->phone}}</td>
                            <td>{{$donor->email}}</td>
                            <td>{{$donor->Weight}}</td>
                            <td>{{$donor->height}}</td>
                            <td>{{$donor->smoker ? 'Sim' : 'Não'}}</td>
                            <td>{{$donor->disease ? 'Sim' : 'Não'}}</td>
                            <td>{{$donor->note}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </tbody>
        </table>
    </div>

@endsection
