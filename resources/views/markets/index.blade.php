@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/commodities/add"> Add New Markets</a>
            <div class="card">
                <div class="card-header">Markets</div>

                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($markets as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>
                                    <a href="/commodities/edit/{{ $row->id }}">Edit</a>
                                    |
                                    <a href="/commodities/delete/{{ $row->id }}">Delete</a>
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