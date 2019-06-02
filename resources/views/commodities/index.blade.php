@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/commodities/add"> Add New Commodity</a>
            <div class="card">
                <div class="card-header">Commodities</div>

                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Unit</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($commodities as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->id_commodities_types }}</td>
                                <td>{{ $row->id_units }}</td>
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
