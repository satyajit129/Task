@extends('layouts.master')
@section('content')
    <h1 class="mt-4" style="text-transform: uppercase;">{{ auth()->user()->name }} Dashboard</h1>

    <div class="card">
        <div class="card-header p-3">
            <div class="header d-flex justify-content-between">
                <h4>My Application</h4>
                <a href="{{ route('user.dashboard.create') }}" class="btn btn-success btn-sm ">Create Application</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th class="text-center" scope="col">Index No</th>
                        <th class="text-center" scope="col">Applicant Name</th>
                        <th class="text-center" scope="col">Application Number</th>
                        <th class="text-center" scope="col">NID Number</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" scope="row">1</th>
                        <td class="text-center">Mark</td>
                        <td class="text-center">987654</td>
                        <td class="text-center">123456</td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm btn-primary">View</a>
                            <a href="" class="btn btn-sm btn-info">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" scope="row">1</th>
                        <td class="text-center">Mark</td>
                        <td class="text-center">987654</td>
                        <td class="text-center">123456</td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm btn-primary">View</a>
                            <a href="" class="btn btn-sm btn-info">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
@endsection
