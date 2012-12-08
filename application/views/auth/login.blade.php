@layout('layouts.frontend')

@section('page_title')
Please Login
@endsection

@section('content')

    @if ( Session::get('login_error') )
        <div class="alert alert-error">
            <p>{{ Session::get('login_error') }}</p>
        </div>
    @endif

<div class="log-in-form">
    <div class="ui-box auth-box">
       
        <form class="log-in" method="post" action="{{ URL::current() }}">
            <div class="control-group{{ $errors->has('email') ? ' error' : '' }}">
                <label for="email">Your email</label>
                <div class="controls">
                    <input type="email" name="email" id="email" placeholder="joe.bloggs@example.com" class="input-xlarge" value="{{ Input::old('email') }}">
                    {{ $errors->has('email') ? '<span class="help-inline">Email Address is required</span>' : '' }}
                </div>
            </div>

            <div class="control-group{{ $errors->has('password') ? ' error' : '' }}">
                <label for="password">Password</label>
                <div class="controls">
                    <input type="password" name="password" id="password" placeholder="hunter2" class="input-xlarge">
                    {{ $errors->has('password') ? '<span class="help-inline">Password is required</span>' : '' }}
                </div>
            </div>

            <label class="checkbox">
                <input type="checkbox" name="remember_me"> Keep me logged in
            </label>

            <div class="form-actions">
                <input type="submit" value="Login" class="btn btn-primary">
            </div>
        </form>
        
    </div>
</div>
@endsection