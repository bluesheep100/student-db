@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <form action="{{ route('checkin') }}" method="post">
                    @csrf

                    @error('card_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="card_id">Kort Nr.</label>
                        <input type="text" class="form-control" name="card_id" id="card_id" autofocus>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Temporary!
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
