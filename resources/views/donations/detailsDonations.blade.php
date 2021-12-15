@extends('simple')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes da doação</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Número de telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Quantidade de litros</th>
                </thead>

                    <tbody>
                        <th scope="row">{{$donation['id']}}</th>
                        <td>{{$donation->name}}</td>
                        <td>{{$donation->phoneNumber}}</td>
                        <td>{{$donation->email}}</td>
                        <td>{{$donation->liters}}</td>

                        <td>
                            <form action="{{route('deleteDonation' , $donation->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('listDonation')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection
