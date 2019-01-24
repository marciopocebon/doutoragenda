@extends('layouts.master')
@section('title', 'Agenda - Doutor Agenda')
@push('scripts')
@endpush
@section('content')
    <section>
        <div class="content-wrapper">
            <div class="container">
                <div class="row">Full Calendar</div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            // Adiciona classe menu ativo
            document.getElementById('menu-agenda').className += 'menu-ativo';
        </script>
    @endpush
@endsection
