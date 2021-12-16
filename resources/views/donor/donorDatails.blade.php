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
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Fumante</th>
                        <th scope="col">Doença</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Ação</th>

                </thead>

                    <tbody>
                        <th scope="row">{{$donor['id']}}</th>
                        <td>{{$donor['name']}}</td>
                        <td>{{$donor['phone']}}</td>
                        <td>{{$donor['email']}}</td>
                        <td>{{$donor['Weight']}}</td>
                        <td>{{$donor['height']}}</td>
                        <td>{{$donor['smoker'] ? 'Sim' : 'Não'}}</td>
                        <td>{{$donor['disease'] ? 'Sim' : 'Não'}}</td>
                        <td>{{$donor['note']}}</td>

                        <td>
                            <form action="{{route('deleteDonor' , $donor->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('listDonor')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection
