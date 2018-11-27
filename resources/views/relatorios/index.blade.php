@extends('layouts.master')
@section('title', 'Relatórios - Doutor Agenda')
@push('scripts')
@endpush
@section('content')
    <section>
        <div class="content-wrapper">
            <div class="container">
                <div class="row">Relatórios</div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            // Adiciona classe menu ativo
            document.getElementById('menu-relatorios').className += 'menu-ativo';
        </script>
    @endpush
@endsection
