@extends('layouts.master')
@section('title', 'Corpo Clínico - Doutor Agenda')
@push('scripts')
@endpush
@section('content')
    <section>
        <div class="content-wrapper">

            {{--BARRA FIXA COM INFORMAÇÕES DE AGENDAMENTO--}}

            <div class="barra-resumo-semana">
                <div class="row">
                    <div class="col-md-2">
                        <p class="titulo">Esta Semana</p>
                        <p class="periodo">03 a 09 de Jan.</p>
                    </div>
                    <div class="col-md-2">
                        <p class="numero">25</p>
                        <p class="descricao">Agendamentos</p>
                    </div>
                    <div class="col-md-2">
                        <p class="numero">12</p>
                        <p class="descricao">Plano de Saúde</p>
                    </div>
                    <div class="col-md-2">
                        <p class="numero">5</p>
                        <p class="descricao">Particular</p>
                    </div>
                    <div class="col-md-2">
                        <p class="numero">8</p>
                        <p class="descricao">Doctor Hoje</p>
                    </div>
                    <div class="col-md-2">
                        <p class="numero">2</p>
                        <p class="descricao">Outros Aplicativos</p>
                    </div>
                </div>
            </div>

            {{--ÁREA DE CONTEÚDO DINÂMICO--}}

            <div class="area-conteudo">
                <h2 class="ac-titulo">Corpo Clínico 👩🏻‍⚕️👨🏼‍⚕️</h2>
                <div class="ac-conteudo">

                    {{--CONTEÚDO ESPECÍFICO DE CADA MENU--}}

                    <div class="acc-corpo-clinico">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item btn-adicionar-profissional">
                                <a href="#">+ Adicionar Profissional</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">
                                    <div class="foto-profissional">
                                        <img src="img/corpo-clinico/bruna.png" alt="Foto do profissional">
                                    </div>
                                    <p>Dra. Bruna Marquezine</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Messages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">Settings</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel">1</div>
                            <div class="tab-pane" id="profile" role="tabpanel">..2.</div>
                            <div class="tab-pane" id="messages" role="tabpanel">.3..</div>
                            <div class="tab-pane" id="settings" role="tabpanel">.4..</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            // Adiciona classe menu ativo
            document.getElementById('menu-configuracoes').className += 'menu-ativo';
        </script>
    @endpush
@endsection
