<form action="{{ URL::to("/patients/{$patient->id}/threads/{$thread->id}/messages") }}" method="POST">
    <div class="row">
	
		<div class="span9">
		
		<textarea class="span8" name="message" id="message" placeholder="Write a response here&hellip;">{{ Input::old('message') }}</textarea>
		
		{{ $errors->has('message') ? '<span class="help-inline">Please enter a message</span>' : '' }}
		<input type="submit" value="Add to discussion" class="btn btn-success" id="add-to-conv">
		
		</div>
    </div>
</form>