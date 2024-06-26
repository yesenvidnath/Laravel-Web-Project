@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12">
            <h3 align="center" class="mt-5">Student Management</h3>
            <hr>
            <p align="center">Student Name : {{ $students->name }}</p>

            <p align="center">Student Address : {{ $students->address }}</p>

            <p align="center">Student School : {{ $students->school }}</p>

            <p align="center">Student Phone : {{ $students->phone }}</p>

            <p align="center">Student age : {{ $students->age }}</p>

            <p align="center">Student NIC : {{ $students->nic }}</p>

            <p align="center">Student Status : {{ $students->status }}</p>

            <p align="center">Student Was Registertd : {{ $students->created_at }}</p>
            <hr>

            <p class="text-right"><a href="{{ route('student') }}" class="btn bt-lg btn-primary">Back to Students</a></p>
        </div>
    </div>
</div>

@endsection
@push('css')
    <style>

    </style>
@endpush

@push('scripts')
    <script>
        // alert();
    </script>
@endpush
