@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>School</td>
                            <td>Phone</td>
                            <td>Age</td>
                            <td>NIC</td>
                            <td>Added to the BD at</td>
                            <td>Last updated at</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ( $students as $key => $student )

                          <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $student->name }}</td>
                            <td scope="col">{{ $student->address }}</td>
                            <td scope="col">{{ $student->school }}</td>
                            <td scope="col">{{ $student->phone }}</td>
                            <td scope="col">{{ $student->age }}</td>
                            <td scope="col">{{ $student->nic }}</td>
                            <td scope="col">{{ $student->created_at }}</td>
                            <td scope="col">{{ $student->updated_at }}</td>

                          </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
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
