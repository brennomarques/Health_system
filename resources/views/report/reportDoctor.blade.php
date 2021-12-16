@extends('simple')
@section('content')

    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Relatório de médicos</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h5 style="color: #013d52;" class="mb-4">Médico(s): {{ $countDoctor }}</h5>
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
                    <th scope="col">CRM</th>
                    <th scope="col">Especialidade</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Data de criação</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                    @foreach ($listDoctor as $doctor)
                        <tr>
                            <th scope="row">{{$doctor->id}}</th>
                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->crm}}</td>
                            <td>{{$doctor->specialist}}</td>
                            <td>{{$doctor->age}}</td>
                            <td>{{$doctor->phone}}</td>
                            <td>{{$doctor->email}}</td>
                            <td>{{$doctor->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </tbody>
        </table>
    </div>

@endsection
