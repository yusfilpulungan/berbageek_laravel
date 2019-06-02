@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/commodities/type_add"> Add New Types</a>
            <div class="card">
                <div class="card-header">Types</div>

                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($types as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->price }}</td>
                                <td>
                                    <a href="/commodities/type_edit/{{ $row->id }}">Edit</a>
                                    |
                                    <a href="/commodities/type_delete/{{ $row->id }}">Delete</a>
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
