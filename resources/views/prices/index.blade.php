@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/commodities/price_add"> Add New Prices</a>
            <div class="card">
                <div class="card-header">Prices</div>

                <div class="card-body">
                    <table>
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
                                <td>{{ $row->id_commodities }}</td>
                                <td>{{ $row->id_trader }}</td>
                                <td>{{ $row->id_operator }}</td>
                                <td>{{ $row->date }}</td>
                                <td>{{ $row->price }}</td>
                                <td>
                                    <a href="/commodities/price_edit/{{ $row->id }}">Edit</a>
                                    |
                                    <a href="/commodities/price_delete/{{ $row->id }}">Delete</a>
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
