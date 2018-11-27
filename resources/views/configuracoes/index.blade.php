@extends('layouts.master')
@section('title', 'Configurações - Doutor Agenda')
@push('scripts')
@endpush
@section('content')
    <section>
        <div class="content-wrapper">
            <div class="container">
                <div class="row">Configurações</div>
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
