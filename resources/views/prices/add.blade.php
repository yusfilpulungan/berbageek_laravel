@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Prices</div>

                <div class="card-body">
                    <form method="POST" action="save">
                        @csrf
                        <div class="form-group row">
                            <label for="id_commodities" class="col-md-4 col-form-label text-md-right">{{ __('Commodity') }}</label>

                            <div class="col-md-6">
                                <select id="id_commodities" class="form-control @error('id_commodities') is-invalid @enderror" name="id_commodities" required>
                                    <option value="">Please choose commodity!</option>
                                    @foreach($commodities as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach   
                                </select>
                                @error('id_commodities')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_trader" class="col-md-4 col-form-label text-md-right">{{ __('Trader') }}</label>

                            <div class="col-md-6">
                                <select id="id_trader" class="form-control @error('id_trader') is-invalid @enderror" name="id_trader" required>
                                    <option value="">Please choose trader!</option>
                                    @foreach($traders as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach    
                                </select>
                                @error('id_trader')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="name" autofocus>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="name" autofocus>

                                @error('price')
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
