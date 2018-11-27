@extends('layouts.master')
@section('title', 'Perfil da Clínica - Doutor Agenda')
@push('scripts')
@endpush
@section('content')
    <section>
        <div class="content-wrapper">
            <div class="container">
                <div class="row">Perfil da Clínica</div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            // Adiciona classe menu ativo
            document.getElementById('menu-clinica').className += 'menu-ativo';
        </script>
    @endpush
@endsection
