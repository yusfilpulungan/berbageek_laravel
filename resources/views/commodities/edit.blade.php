@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Commodities</div>

                <div class="card-body">
                    @foreach($commodities as $row)
                        <form method="POST" action="/commodities/update">
                            @csrf
                            <input type="hidden" name="id" value="{{ $row->id }}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $row->name }}" required autocomplete="name" autofocus>

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
                                        @foreach($types as $row2)
                                            <option value="{{ $row2->id }}"
                                                @if ($row->id_commodities_types == $row2->id))
                                                    selected="selected"
                                                @endif
                                            >{{ $row2->name }}</option>
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
                                        @foreach($units as $row3)
                                            <option value="{{ $row3->id }}"
                                                @if ($row->id_units == $row3->id))
                                                    selected="selected"
                                                @endif
                                            >{{ $row3->name }}</option>
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
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
