@extends('Backend.Layouts.app')

@section('content')
    <div style="line-height: 4rem;" class="card-body">
        <table>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @foreach ($patients as $patient)
                <tr style="gap: 50px;">

                    <td>{{ $patient->name }}</td>

                    <td>
                        <a style="border-radius:10px; padding:10px 15px; background-color: tomato; color: white;"
                            href="{{ route('admin.patient.report.show', $patient->id) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
