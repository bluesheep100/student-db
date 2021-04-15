@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="required">Email</label>
                                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password" class="required">Kodeord</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Husk mig
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">
                                    Log ind
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="d-inline-block pt-10" href="{{ route('password.request') }}">
                                        Glemt dit kodeord?
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
