@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <h1>Edit Students</h1>
            </div>
            <div class="col-12 col-md-8 border m-3 p-3">
                <form method="POST" action="{{ route('student.update', $students->id) }}">
                    <input type="hidden" name="stu_id" value="{{ $students->id }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $students->name }}">
                        </div>
                        <div class="col-md-6">
                            <label>Student Phone</label>
                            <input type="tel" class="form-control" name="address" value="{{ $students->address }}">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Student school</label>
                            <input type="text" class="form-control" name="school" value="{{ $students->school }}">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Student phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $students->phone }}">

                        </div>
                        <div class="col-md-12">
                            <label>Student NIC</label>
                            <input type="text" class="form-control" name="nic" value="{{ $students->nic }}">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Student age</label>
                            <input type="text" class="form-control" name="age" value="{{ $students->age }}">

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Student Status</label>
                            <select class="form-control" name="status">
                                @if ($students->status == 'active')
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                @else
                                    <option value="inactive">Inactive</option>
                                    <option value="active">Active</option>
                                @endif

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update Now">
                            <a href="{{ route('student') }}" class="btn bt-lg btn-warning">Back to Students</a>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>


@endsection


@push('css')
    <style>

    </style>
@endpush
