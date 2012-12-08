<form action="{{ URL::to("/patients/{$patient->id}/threads/{$thread->id}/messages") }}" method="POST">
    <span class="author-icon"></span>
    <textarea name="message" id="message" placeholder="Write your response here&hellip;">{{ Input::old('message') }}</textarea>
    {{ $errors->has('message') ? '<span class="help-inline">Please enter a message</span>' : '' }}
    <input type="submit" value="Respond">
</form>