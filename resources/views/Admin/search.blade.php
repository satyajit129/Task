@foreach ($applications as $application)
    <tr id="application-row-{{ $application->id }}">
        <td class="text-center">{{ $loop->iteration }}</td>
        <td class="text-center">{{ $application->name }}</td>
        <td class="text-center">{{ $application->application_no }}</td>
        <td class="text-center">{{ $application->nid_no }}</td>
        <td class="text-center">{{ $application->mobile_no }}</td>
        <td class="text-center"><img src="{{ asset('storage/images/' . $application->photo) }}" width="50px" alt="Picture"></td>
        <td class="text-center">
            <a href="#" class="btn btn-sm btn-primary">View</a>
            <a href="#" onclick="deleteApplication({{ $application->id }})" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
@endforeach
