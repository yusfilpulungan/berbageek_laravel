@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Markets</div>

                <div class="card-body">
                    @foreach($traders as $row)
                        <form method="POST" action="/traders/update">
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
                                    <label for="id_market" class="col-md-4 col-form-label text-md-right">{{ __('Market') }}</label>
    
                                    <div class="col-md-6">
                                        <select id="id_market" class="form-control @error('id_market') is-invalid @enderror" name="id_market" required>
                                            <option value="">Please choose market!</option>
                                            @foreach($markets as $row2)
                                                <option value="{{ $row2->id }}"
                                                    @if ($row->id_market == $row2->id))
                                                        selected="selected"
                                                    @endif
                                                >{{ $row2->name }}</option>
                                            @endforeach    
                                        </select>
                                        @error('id_market')
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
