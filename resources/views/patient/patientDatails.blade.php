@extends('simple')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do Paciente</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobre nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Doador</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Ação</th>

                </thead>

                    <tbody>
                        <th scope="row">{{$patient['id']}}</th>
                        <td>{{$patient['name']}}</td>
                        <td>{{$patient['last_name']}}</td>
                        <td>{{$patient['age']}}</td>
                        <td>{{$patient['address']}}</td>
                        <td>{{$patient['phone']}}</td>
                        <td>{{$patient['email']}}</td>ç
                        <td>{{$patient['is_donor'] ? 'Sim' : 'Não'}}</td>
                        <td>{{$patient['created_at']}}</td>

                        <td>
                            <form action="{{route('deletePatient' , $patient->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('listPatient')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection
