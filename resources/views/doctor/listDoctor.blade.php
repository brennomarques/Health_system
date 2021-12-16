@extends('simple')
@section('content')
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
    </svg>

    @if (session("messages"))
        <div class="alert alert-success d-flex justify-content-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                {{session("messages")}}
            </div>
        </div>
    @endif

    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Listar de Médicos</h1>
    </div>

    <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CRM</th>
                <th scope="col">Especialista</th>
                <th scope="col">Ação</th>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                    <tr>
                        <th scope="row">{{$doctor->id}}</th>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->crm}}</td>
                        <td>{{$doctor->specialist}}</td>
                        <td width="10"><a href="{{route('searchDoctor', $doctor->id)}}" class="btn btn-outline-primary" title="Ver detalhes"><i class="fa fa-eye"></i></a></td>
                        <td width="10"><a href="{{route('editDoctor', $doctor->id)}}" class="btn btn-outline-success" title="Ver detalhes"><i class="far fa-edit"></i></i></a></td>

                        <td width="10">
                            <form action="{{route('deleteDoctor', $doctor->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
