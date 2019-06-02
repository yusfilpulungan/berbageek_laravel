@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Commodities</div>

                <div class="card-body">
                    <form method="POST" action="save">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_commodities_types" class="col-md-4 col-form-label text-md-right">{{ __('Commodity Type') }}</label>

                            <div class="col-md-6">
                                <select id="id_commodities_types" class="form-control @error('id_commodities_types') is-invalid @enderror" name="id_commodities_types" required>
                                    <option value="">Please choose type of commodity!</option>
                                    @foreach($types as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach   
                                </select>
                                @error('id_commodities_types')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_units" class="col-md-4 col-form-label text-md-right">{{ __('Commodity Unit') }}</label>

                            <div class="col-md-6">
                                <select id="id_units" class="form-control @error('id_units') is-invalid @enderror" name="id_units" required>
                                    <option value="">Please choose unit of commodity!</option>
                                    @foreach($units as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach    
                                </select>
                                @error('id_units')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
