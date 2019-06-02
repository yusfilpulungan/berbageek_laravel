@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Prices</div>

                <div class="card-body">
                    @foreach($prices as $row)
                        <form method="POST" action="/prices/update">
                            @csrf
                            <input type="hidden" name="id" value="{{ $row->id }}">
                            <div class="form-group row">
                                <label for="id_commodities" class="col-md-4 col-form-label text-md-right">{{ __('Commodity') }}</label>
    
                                <div class="col-md-6">
                                    <select id="id_commodities" class="form-control @error('id_commodities') is-invalid @enderror" name="id_commodities" required>
                                        <option value="">Please choose commodity!</option>
                                        @foreach($commodities as $row2)
                                            <option value="{{ $row2->id }}"
                                                @if ($row->id_commodities == $row2->id))
                                                    selected="selected"
                                                @endif
                                            >{{ $row2->name }}</option>
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
                                        @foreach($traders as $row3)
                                            <option value="{{ $row3->id }}"
                                                @if ($row->id_trader == $row3->id))
                                                    selected="selected"
                                                @endif
                                            >{{ $row3->name }}</option>
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
                                    <input id="date" type="text" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $row->date }}" required autocomplete="name" autofocus>
    
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
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $row->price }}" required autocomplete="name" autofocus>
    
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
