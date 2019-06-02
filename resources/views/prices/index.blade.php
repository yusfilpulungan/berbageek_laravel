@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/prices/add"> Add New Prices</a>
            <div class="card">
                <div class="card-header">Prices</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Trader</th>
                                <th>Operator</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prices as $row)
                            <tr>
                                <td>{{ $row->commodity }}</td>
                                <td>{{ $row->trader }}</td>
                                <td>{{ $row->operator }}</td>
                                <td>{{ $row->date }}</td>
                                <td>{{ $row->price }}</td>
                                <td>
                                    <a href="/prices/edit/{{ $row->id }}">Edit</a>
                                    |
                                    <a href="/prices/delete/{{ $row->id }}">Delete</a>
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
