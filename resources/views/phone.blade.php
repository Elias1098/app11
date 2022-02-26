@extends('app')
@section('content')
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($phones as  $phone)
                <tr>
                    <td scope="row">{{ $no++ }}</td>
                    <td>{{ $phone->user->name }}</td>
                    <td>{{ $phone->phone }}</td>
                    <td>{{ $phone->id }}</td>

                </tr>
                @empty
                <tr>
                    <td scope="row" colspan="4">No record</td>
                  
                </tr>
                @endforelse
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
               
            </tbody>
    </table>
@endsection