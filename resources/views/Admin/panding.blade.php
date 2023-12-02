@extends('layouts.master')
@section('content')
    <h1 class="mt-4" style="text-transform: uppercase;">{{ auth()->user()->name }} Dashboard</h1>
    @include('layouts.inc.message')
    <div class="card">
        <div class="card-header p-3">
            <div class="header d-flex justify-content-between">
                <h4>All Panding Application</h4>
                <div class="nftmax-header__form">
                    <form class="nftmax-header__form-inner" action="#">
                        <button class="search-btn" type="submit"><img src="{{ asset('Backend/assets/img/search.png') }}"
                                alt="#"></button>
                        <input name="s" value type="text" placeholder="Search items, collections...">
                    </form>
                </div> 
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
                        <tr id="application-row-{{ $application->id }}">
                            <td class="text-center">{{ $loop->iteration }}</th>
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
                                <a href="#" class="btn btn-sm btn-primary">View</a>

                                <button type="button" class="btn btn-sm btn-success approve-btn"
                                    data-application-id="{{ $application->id }}">Approve</button>

                                <button type="button" class="btn btn-sm btn-danger reject-btn"
                                    data-application-id="{{ $application->id }}">Reject</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

