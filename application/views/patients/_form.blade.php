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

           <div class="control-group{{ $errors->has('date_of_birth') ? ' error' : '' }}">
                <label for="address" class="control-label">Date of Birth</label>
                <div class="controls">
                    <input type="text" name="date_of_birth" id="date_of_birth" class="input-xxlarge" value="{{ $errors->has('date_of_birth') ? Input::old('date_of_birth') : $patient->date_of_birth }}">
                    {{ $errors->has('date_of_birth') ? '<span class="help-inline">Date of Birth</span>' : '' }}
                </div>
            </div>

           <div class="control-group{{ $errors->has('gender') ? ' error' : '' }}">
                <label for="gender" class="control-label">Gender</label>
                <div class="controls">
                    <input type="text" name="gender" id="gender" class="input-xxlarge" value="{{ $errors->has('gender') ? Input::old('gender') : $patient->gender }}">
                    {{ $errors->has('gender') ? '<span class="help-inline">Gender is Required</span>' : '' }}
                </div>
            </div>

           <div class="control-group{{ $errors->has('medical_history') ? ' error' : '' }}">
                <label for="address" class="control-label">Medical History</label>
                <div class="controls">
                    <input type="text" name="medical_history" id="medical_history" class="input-xxlarge" value="{{ $errors->has('medical_history') ? Input::old('medical_history') : $patient->medical_history }}">
                    {{ $errors->has('address') ? '<span class="help-inline">Medical History is Required</span>' : '' }}
                </div>
            </div>

           <div class="control-group{{ $errors->has('medication') ? ' error' : '' }}">
                <label for="medication" class="control-label">Medication</label>
                <div class="controls">
                    <input type="text" name="medication" id="medication" class="input-xxlarge" value="{{ $errors->has('medication') ? Input::old('medication') : $patient->medication }}">
                    {{ $errors->has('medication') ? '<span class="help-inline">Medication is Required</span>' : '' }}
                </div>
            </div>

           <div class="control-group{{ $errors->has('allergies') ? ' error' : '' }}">
                <label for="allergies" class="control-label">Allergies</label>
                <div class="controls">
                    <input type="text" name="allergies" id="allergies" class="input-xxlarge" value="{{ $errors->has('allergies') ? Input::old('allergies') : $patient->allergies }}">
                    {{ $errors->has('allergies') ? '<span class="help-inline">Allergies is required</span>' : '' }}
                </div>
            </div>

        </fieldset>

        <div class="form-actions">
            {{ Form::submit('Save changes', array('class' => 'btn btn-primary')) }}
        </div>
    </form>
