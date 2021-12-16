@extends('simple')
@section('content')

    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Relatório de Doação</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h5 style="color: #013d52;" class="mb-4">Doaçõe(s): {{ $countDonation }}</h5>
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
                    <th scope="col">Número de telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Quantidade de litros</th>
                    <th scope="col">Data de criação</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                    @foreach ($listDonation as $donation)
                        <tr>
                            <th scope="row">{{$donation->id}}</th>
                            <td>{{$donation->name}}</td>
                            <td>{{$donation->phoneNumber}}</td>
                            <td>{{$donation->email}}</td>
                            <td>{{$donation->liters}}</td>
                            <td>{{$donation->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </tbody>
        </table>
    </div>

@endsection
