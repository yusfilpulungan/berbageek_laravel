@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/traders/add"> Add New Traders</a>
            <div class="card">
                <div class="card-header">Traders</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Trader</th>
                                <th>Market</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($traders as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->markets }}</td>
                                <td>
                                    <a href="/traders/edit/{{ $row->id }}">Edit</a>
                                    |
                                    <a href="/traders/delete/{{ $row->id }}">Delete</a>
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
