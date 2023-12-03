@extends('layouts.master')
@section('content')
    <h1 class="mt-4" style="text-transform: uppercase;">{{ auth()->user()->name }} Dashboard</h1>
    @include('layouts.inc.message')
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
                        <th class="text-center" scope="col">Mobile Number</th>
                        <th class="text-center" scope="col">Picture</th>
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $application)
                        <tr>
                            <td class="text-center"> {{ $loop->iteration }}</th>
                            <td class="text-center">{{ $application->name }}</td>
                            <td class="text-center">{{ $application->application_no }}</td>
                            <td class="text-center">{{ $application->nid_no }}</td>
                            <td class="text-center">{{ $application->mobile_no }}</td>
                            <td class="text-center"><img src="{{ asset('storage/images/' . $application->photo) }}"
                                    width="50px" alt="Picture"></td>
                            <td class="text-center">
                                @if ($application->status == 0)
                                    <h6>Pending</h6>
                                @else
                                    <h6>Approve</h6>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ route('user.dashboard.edit', $application->id) }}"
                                    class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ route('user.dashboard.destroy', $application->id) }}"
                                    onclick="return confirm('Are you really want to delete the data ?')"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
