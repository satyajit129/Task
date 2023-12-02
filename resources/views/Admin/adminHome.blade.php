@extends('layouts.master')
@section('content')
    <h1 class="mt-4" style="text-transform: uppercase;">{{ auth()->user()->name }} Dashboard</h1>

    <div class="card">
        <div class="card-header p-3">
            <div class="header d-flex justify-content-between">
                <h4>All Application</h4>
                <div class="nftmax-header__form">
                    <form class="nftmax-header__form-inner" id="search-form"
                          action="{{ route('search.applications') }}">
                        <button class="search-btn" type="submit"><img
                                src="{{ asset('Backend/assets/img/search.png') }}" alt="#"></button>
                        <input name="search" value type="text" id="search"
                               placeholder="Search items, collections...">
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="applications-table">

                <thead>
                <tr>
                    <th class="text-center" scope="col">Index No</th>
                    <th class="text-center" scope="col">Applicant Name</th>
                    <th class="text-center" scope="col">Application Number</th>
                    <th class="text-center" scope="col">NID Number</th>
                    <th class="text-center" scope="col">Mobile Number</th>
                    <th class="text-center" scope="col">Picture</th>
                    {{-- <th class="text-center" scope="col">Status</th> --}}
                    <th class="text-center" scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="applications-body">
                @foreach ($applications as $application)
                    <tr id="application-row-{{ $application->id }}">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $application->name }}</td>
                        <td class="text-center">{{ $application->application_no }}</td>
                        <td class="text-center">{{ $application->nid_no }}</td>
                        <td class="text-center">{{ $application->mobile_no }}</td>
                        <td class="text-center"><img
                                src="{{ asset('storage/images/' . $application->photo) }}" width="50px"
                                alt="Picture"></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-primary">View</a>
                            <a href="#" onclick="deleteApplication({{ $application->id }})"
                               class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
