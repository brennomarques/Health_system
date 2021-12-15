@extends('simple')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do Médico</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
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
                        <th scope="col">Ação</th>

                </thead>

                    <tbody>
                        <th scope="row">{{$doctor['id']}}</th>
                        <td>{{$doctor['name']}}</td>
                        <td>{{$doctor['crm']}}</td>
                        <td>{{$doctor['specialist']}}</td>
                        <td>{{$doctor['age']}}</td>
                        <td>{{$doctor['phone']}}</td>
                        <td>{{$doctor['email']}}</td>
                        <td>{{$doctor['created_at']}}</td>

                        <td>
                            <form action="{{route('deleteDoctor' , $doctor->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('listDoctor')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection
