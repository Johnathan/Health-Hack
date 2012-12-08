    <form action="{{ URL::current() }}" method="POST" class="form-horizontal">
        <fieldset>
            <legend>Patient Details</legend>
            <div class="control-group{{ $errors->has('name') ? ' error' : '' }}">
                <label for="name" class="control-label">Name</label>
                <div class="controls">
                    <input type="text" name="name" id="name" class="input-xxlarge" value="{{ $errors->has('name') ? Input::old('name') : $patient->name }}">
                    {{ $errors->has('name') ? '<span class="help-inline">Name is required</span>' : '' }}
                </div>
            </div>

            <div class="control-group{{ $errors->has('address') ? ' error' : '' }}">
                <label for="address" class="control-label">Address</label>
                <div class="controls">
                    <input type="text" name="address" id="address" class="input-xxlarge" value="{{ $errors->has('address') ? Input::old('address') : $patient->address }}">
                    {{ $errors->has('address') ? '<span class="help-inline">Address is required</span>' : '' }}
                </div>
            </div>
        </fieldset>

        <div class="form-actions">
            {{ Form::submit('Save changes', array('class' => 'btn btn-primary')) }}
        </div>
    </form>