@extends('simple')
@section('content')

<div class="main-content container-fluid mt-5">

    <section class="section">
        <div class="row mb-2" style="color: #013d52;">
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Médicos</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{ $countDoctor ?? 0 }} Pessoas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Pacientes</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{$countPatient ?? 0}} Registros</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Estagiários</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{$countTreinee ?? 0}} Registros</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Doadores</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{$countDonor ?? 0}} Registros</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mb-4 mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="color: #013d52;">
                        <h3 class='card-heading p-1 pl-3'>Métricas de doação</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="pl-3">
                                    <h1 class='mt-5'>Sangue {{$countBloodBank*60.8 ?? 0}} Litros</h1>
                                    <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i> +19%</span> que no mês passado</p>
                                    <div class="legends">
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-info mr-2'></div><span class='text-xs'>Mês passado: 503 Litros</span>
                                        </div>
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-blue mr-2'></div><span class='text-xs'>Mês atual: 204 litros</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">

                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex" style="color: #013d52;">
                            <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Progresso
                        </h4>

                    </div>
                    <div class="card-body px-0 py-1">
                        <table class='table table-borderless'>
                            <tr>
                                <td class='col-3'>Médicos</td>
                                <td class='col-6'>
                                    <div class="progress progress-info">
                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>60%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>Estagiário</td>
                                <td class='col-6'>
                                    <div class="progress progress-success">
                                        <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>30%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>Doadores</td>
                                <td class='col-6'>
                                    <div class="progress progress-danger">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>50%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>Banco de sangue</td>
                                <td class='col-6'>
                                    <div class="progress progress-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>80%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>Doaçãos</td>
                                <td class='col-6'>
                                    <div class="progress progress-secondary">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>65%</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

