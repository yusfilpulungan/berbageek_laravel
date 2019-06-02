@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/units/add"> Add New Units</a>
            <div class="card">
                <div class="card-header">Units</div>

                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($units as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>
                                    <a href="/units/edit/{{ $row->id }}">Edit</a>
                                    |
                                    <a href="/units/delete/{{ $row->id }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
